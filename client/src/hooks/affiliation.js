import { useFormik } from 'formik'
import { useEffect, useState } from 'react'

import axios from '@/lib/axios'
import { affiliationSchema } from '@/utils/schema'

const useAffiliation = () => {
    const [affiliations, setAffiliations] = useState([])
    const [isLoading, setIsLoading] = useState(false)
    const [error, setError] = useState(null)

    useEffect(() => {
        ;(async () => {
            try {
                setIsLoading(true)
                const {
                    data: { data },
                } = await axios.get('http://localhost:8000/api/affiliations')

                setAffiliations(data)
            } catch (error) {
                setError(error.message)
                console.error(error.message)
            } finally {
                setIsLoading(false)
            }
        })()

        // getBranches()
    }, [])

    const formik = useFormik({
        initialValues: {
            name: '',
            description: '',
            launched_at: '',
            logo_url: '',
        },
        validationSchema: affiliationSchema,
        onSubmit: async (values, { resetForm }) => {
            const formData = {
                id: values.id,
                name: values.name,
                description: values.description,
                launched_at: values.launched_at,
                logo_url: values.logo_url,
            }

            try {
                formData.id
                    ? handleUpdateAffiliation(formData)
                    : handleStoreAffiliation(formData)

                resetForm()

                console.log(formData)
            } catch (error) {
                console.error(error.message)
            }
        },
    })

    const getAffiliation = async id => {
        try {
            setIsLoading(true)
            const {
                data: { data },
            } = await axios.get(`http://localhost:8000/api/affiliations/${id}`)

            formik.setFieldValue('id', data.id)
            formik.setFieldValue('name', data.name)
            formik.setFieldValue('description', data.description)
            formik.setFieldValue('launched_at', data.launched_at)
            formik.setFieldValue('logo_url', data.logo_url)
        } catch (error) {
            setError(error.message)
            console.error(error.message)
        } finally {
            setIsLoading(false)
        }
    }

    const handleStoreAffiliation = async values => {
        try {
            setIsLoading(true)
            const {
                data: { data },
            } = await axios.post(
                'http://localhost:8000/api/affiliations',
                values,
            )

            setAffiliations(prev => [...prev, data])
            console.log(data)
        } catch (error) {
            setError(error.message)
            console.error(error.message)
        } finally {
            setIsLoading(false)
        }
    }

    const handleUpdateAffiliation = async values => {
        try {
            setIsLoading(true)
            const {
                data: { data },
            } = await axios.put(
                `http://localhost:8000/api/affiliations/${values.id}`,
                values,
            )

            const updatedAffiliation = affiliations.map(item =>
                item.id === data.id ? data : item,
            )

            setTalents(updatedAffiliation)
        } catch (error) {
            setError(error.message)
            console.error(error.message)
        } finally {
            setIsLoading(false)
        }
    }

    const handleDeleteAffiliation = async id => {
        const isOk = window.confirm('Are you sure?')

        if (isOk) {
            try {
                setIsLoading(true)
                await axios.delete(
                    `http://localhost:8000/api/affiliations/${id}`,
                )

                const filteredAffiliation = affiliations.filter(
                    item => item.id !== id,
                )

                setTalents(filteredAffiliation)
            } catch (error) {
                setError(error.message)
                console.error(error.message)
            } finally {
                setIsLoading(false)
            }
        }
    }

    const getBranches = async () => {
        try {
            setIsLoading(true)
            const {
                data: { data },
            } = await axios.get('http://localhost:8000/api/branches')

            setBranches(data)
        } catch (error) {
            setError(error.message)
            console.error(error.message)
        } finally {
            setIsLoading(false)
        }
    }

    return {
        affiliations,
        isLoading,
        error,
        formik,
        getAffiliation,
        handleDeleteAffiliation,
    }
}

export default useAffiliation
