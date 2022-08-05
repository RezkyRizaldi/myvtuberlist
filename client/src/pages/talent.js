import Head from 'next/head'

import Button from '@/components/Button'
import Form from '@/components/Form'
import AppLayout from '@/components/Layouts/AppLayout'
import useTalent from '@/hooks/talent'
import { ExclamationCircleIcon } from '@heroicons/react/solid'

const Talent = () => {
    const {
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
        // affiliations,
    } = useTalent()

    return (
        <AppLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Talent
                </h2>
            }>
            <Head>
                <title>Talent - MyVtuberList</title>
            </Head>

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="border-b border-gray-200 bg-white p-6">
                            {error && (
                                <div
                                    className="mb-5 flex items-center rounded-md bg-red-500 px-4 py-3 text-sm font-bold text-white"
                                    role="alert">
                                    <ExclamationCircleIcon className="mr-2 h-5 w-5" />
                                    <p>{error}</p>
                                </div>
                            )}
                            <Form
                                formik={formik}
                                nicknames={nicknames}
                                deleteNickname={deleteNickname}
                                input={input}
                                setInput={setInput}
                                setImage={setImage}
                                handleKeyDown={handleKeyDown}
                                handleKeyUp={handleKeyUp}
                            />
                            <div className="mt-4 grid grid-cols-3 gap-7">
                                {isLoading ? (
                                    <>
                                        <svg
                                            aria-hidden="true"
                                            role="status"
                                            className="mr-2 h-8 w-8 animate-spin fill-blue-600 text-gray-200 dark:text-gray-600"
                                            viewBox="0 0 100 101"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                fill="currentFill"
                                            />
                                        </svg>
                                        <span className="sr-only">
                                            Loading...
                                        </span>
                                    </>
                                ) : (
                                    talents.map(talent => (
                                        <div
                                            key={talent.id}
                                            className="max-w-sm overflow-hidden rounded shadow-lg">
                                            <img
                                                className="w-full"
                                                src={
                                                    talent.images_url
                                                        ? `http://localhost:8000/images/${talent.images_url}`
                                                        : 'https://via.placeholder.com/150x100'
                                                }
                                                alt={talent.name}
                                            />
                                            <div className="px-6 py-4">
                                                <div className="mb-2 flex items-center gap-x-2">
                                                    <p className="text-xl font-bold">
                                                        {talent.name}
                                                    </p>
                                                    <span className="text-xs">
                                                        (
                                                        {talent.originalName ??
                                                            'Original Name'}
                                                        )
                                                    </span>
                                                </div>
                                                <p className="truncate text-base text-gray-700">
                                                    {talent.description ??
                                                        'Description'}
                                                </p>
                                                <div className="flex items-center gap-2">
                                                    <Button
                                                        className="mt-2 bg-blue-500 hover:bg-blue-700 focus:border-blue-900 focus:ring-blue-300 active:bg-blue-900"
                                                        type="button"
                                                        onClick={() =>
                                                            getTalent(
                                                                talent.slug,
                                                            )
                                                        }>
                                                        Edit
                                                    </Button>
                                                    <Button
                                                        className="mt-2 bg-red-500 hover:bg-red-700 focus:border-red-900 focus:ring-red-300 active:bg-red-900"
                                                        type="button"
                                                        onClick={() =>
                                                            handleDeleteTalent(
                                                                talent.slug,
                                                            )
                                                        }>
                                                        Delete
                                                    </Button>
                                                </div>
                                            </div>
                                            <div className="px-6 pt-4 pb-2">
                                                <span className="mr-2 mb-2 inline-block rounded-full bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700">
                                                    {talent?.affiliation
                                                        ?.name ?? 'None'}
                                                </span>
                                                <span className="mr-2 mb-2 inline-block rounded-full bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700">
                                                    {talent?.branch?.name ??
                                                        'None'}
                                                </span>
                                                <span className="mr-2 mb-2 inline-block rounded-full bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700">
                                                    {talent?.generation?.name ??
                                                        'None'}
                                                </span>
                                            </div>
                                        </div>
                                    ))
                                )}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    )
}

export default Talent
