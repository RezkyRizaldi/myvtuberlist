import { useFormik } from 'formik'
import { useEffect, useRef, useState } from 'react'

import axios from '@/lib/axios'
import { TalentSchema } from '@/utils/schema'

const useTalent = () => {
    const [talents, setTalents] = useState([])
    const [affiliations, setAffiliations] = useState([])
    const [nicknames, setNicknames] = useState([])
    const [input, setInput] = useState('')
    const [image, setImage] = useState(null)
    const [isKeyReleased, setIsKeyReleased] = useState(false)
    const [isLoading, setIsLoading] = useState(false)
    const [error, setError] = useState(null)

    useEffect(() => {
        ;(async () => {
            try {
                setIsLoading(true)
                const {
                    data: { data },
                } = await axios.get('http://localhost:8000/api/talent')

                setTalents(data)
            } catch (error) {
                setError(error.message)
                console.error(error.message)
            } finally {
                setIsLoading(false)
            }
        })()

        getAffiliation()
    }, [])

    const formik = useFormik({
        initialValues: {
            name: '',
            original_name: '',
            description: '',
            debuted_at: '',
            status: '',
            gender: '',
            age: 0,
            birthday: '',
            height: 0,
            emoji: '',
            affiliation: '',
            branch: '',
            generation: '',
        },
        validationSchema: TalentSchema,
        onSubmit: async (values, { resetForm }) => {
            const formData = {
                name: values.name,
                original_name: values.original_name,
                description: values.description,
                debuted_at: values.debuted_at,
                status: values.status,
                gender: values.gender,
                age: values.age,
                birthday: values.birthday,
                height: values.height,
                emoji: values.emoji,
                affiliation_id: values.affiliation,
                branch_id: values.branch,
                generation_id: values.generation,
            }

            if (values.id) {
                formData.id = values.id
            }

            try {
                formData.id
                    ? handleUpdateTalent(formData)
                    : handleStoreTalent(formData)

                resetForm()
                setImage(null)
            } catch (error) {
                console.error(error.message)
            }
        },
    })

    const handleKeyDown = e => {
        const input = e.target.value
        const trimmedValue = input.trim()

        if (
            (e.key === ',' || e.key === 'Enter') &&
            trimmedValue.length &&
            !nicknames.includes(trimmedValue)
        ) {
            e.preventDefault()
            setNicknames(prev => [...prev, trimmedValue])
            setInput('')
        }

        if (
            e.key === 'Backspace' &&
            !input.length &&
            nicknames.length &&
            isKeyReleased
        ) {
            e.preventDefault()

            const newNicknames = [...nicknames]
            const poppedNickname = newNicknames.pop()

            setNicknames(newNicknames)
            setInput(poppedNickname)
        }

        setIsKeyReleased(false)
    }

    const handleKeyUp = () => {
        setIsKeyReleased(true)
    }

    const deleteNickname = index => {
        setNicknames(prev => prev.filter((_, i) => i !== index))
    }

    const getTalent = async slug => {
        try {
            setIsLoading(true)
            const {
                data: { data },
            } = await axios.get(`http://localhost:8000/api/talent/${slug}`)

            formik.setFieldValue('id', data.id)
            formik.setFieldValue('name', data.name)
            formik.setFieldValue('original_name', data.original_name ?? '')
            formik.setFieldValue('nicknames', data.nicknames ?? '')
            formik.setFieldValue('description', data.description ?? '')
            formik.setFieldValue('debuted_at', data.debuted_at ?? '')
            formik.setFieldValue('images_url', data.images_url ?? '')
            formik.setFieldValue('status', data.status ?? '')
            formik.setFieldValue('gender', data.gender ?? '')
            formik.setFieldValue('age', data.age ?? 0)
            formik.setFieldValue('birthday', data.birthday ?? '')
            formik.setFieldValue('height', data.height ?? 0)
            formik.setFieldValue('emoji', data.emoji ?? '')
            formik.setFieldValue('affiliation', data.affiliation_id ?? '')
            formik.setFieldValue('branch', data.branch_id ?? '')
            formik.setFieldValue('generation', data.generation_id ?? '')

            setError(null)
        } catch (error) {
            setError(error.message)
            console.error(error.message)
        } finally {
            setIsLoading(false)
        }
    }

    const handleStoreTalent = async values => {
        try {
            const formData = new FormData()
            Object.keys(values).forEach(key => {
                formData.append(key, values[key])
            })

            if (image) {
                formData.append('images_url', image)
            }

            if (nicknames) {
                formData.append('nicknames', nicknames.join(','))
            }

            setIsLoading(true)

            const {
                data: { data },
            } = await axios.post('http://localhost:8000/api/talent', formData, {
                headers: {
                    'Content-Type': `multipart/form-data; charset=utf-8; boundary=${Math.random()
                        .toString()
                        .substring(2)}`,
                },
            })

            setTalents(prev => [...prev, data])
            setError(null)
        } catch (error) {
            setError(error.message)
            console.error(error.message)
        } finally {
            setIsLoading(false)
        }

        setNicknames([])
    }

    const handleUpdateTalent = async values => {
        try {
            setIsLoading(true)
            const {
                data: { data },
            } = await axios.put(
                `http://localhost:8000/api/talent/${values.slug}`,
                values,
            )

            const updatedTalent = talents.map(item =>
                item.slug === data.slug ? data : item,
            )

            setTalents(updatedTalent)
            setError(null)
        } catch (error) {
            setError(error.message)
            console.error(error.message)
        } finally {
            setIsLoading(false)
        }
    }

    const handleDeleteTalent = async slug => {
        const isOk = window.confirm('Are you sure?')

        if (isOk) {
            try {
                setIsLoading(true)
                await axios.delete(`http://localhost:8000/api/talent/${slug}`)

                const filteredTalent = talents.filter(
                    item => item.slug !== slug,
                )

                setTalents(filteredTalent)
                setError(null)
            } catch (error) {
                setError(error.message)
                console.error(error.message)
            } finally {
                setIsLoading(false)
            }
        }
    }

    const getAffiliation = async () => {
        try {
            setIsLoading(true)
            const {
                data: { data },
            } = await axios.get('http://localhost:8000/api/affiliations')

            setAffiliations(data)
            setError(null)
        } catch (error) {
            setError(error.message)
            console.error(error.message)
        } finally {
            setIsLoading(false)
        }
    }

    return {
        talents,
        isLoading,
        error,
        formik,
        nicknames,
        input,
        setInput,
        setImage,
        handleKeyDown,
        handleKeyUp,
        deleteNickname,
        getTalent,
        handleDeleteTalent,
        affiliations,
    }
}

export default useTalent
