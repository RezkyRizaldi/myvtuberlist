import * as Yup from 'yup'

export const affiliationSchema = Yup.object().shape({
    name: Yup.string().required('Name is required.'),
    description: Yup.string().nullable(),
    launched_at: Yup.date().nullable(),
    logo_url: Yup.string().nullable(),
})

export const TalentSchema = Yup.object().shape({
    name: Yup.string().required('Name is required.'),
    original_name: Yup.string().nullable(),
    nicknames: Yup.string().nullable(),
    description: Yup.string().nullable(),
    images_url: Yup.string().nullable(),
    debuted_at: Yup.date().nullable(),
    status: Yup.string().nullable(),
    gender: Yup.string().nullable(),
    age: Yup.number().nullable(),
    height: Yup.number().nullable(),
    birthday: Yup.date().nullable(),
    emoji: Yup.string().nullable(),
    affiliation: Yup.string().required('Affiliation is required.'),
    branch: Yup.string().required('Branch is required.'),
    generation: Yup.string().required('Generation is required.'),
})
