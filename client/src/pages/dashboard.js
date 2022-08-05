import Head from 'next/head'

import AppLayout from '@/components/Layouts/AppLayout'
import axios from '@/lib/axios'
import { useEffect, useState } from 'react'

const Dashboard = () => {
    const [datas, setDatas] = useState([])

    const fetchData = async () => {
        try {
            const {
                data: { data },
            } = await axios.get('http://localhost:8000/api/affiliations')

            // console.log(data)
            setDatas(data)
        } catch (error) {
            console.error(error.message)
        }
    }

    useEffect(() => {
        fetchData()
    }, [])

    return (
        <AppLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>
            }>
            <Head>
                <title>MyVtuberList</title>
            </Head>

            <div className="py-12">
                <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div className="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                        <div className="border-b border-gray-200 bg-white p-6">
                            <div className="grid gap-4">
                                <div>
                                    <h1 className="text-3xl font-bold">
                                        Database
                                    </h1>
                                    <div className="mt-2 rounded bg-slate-100">
                                        {datas.length > 0 && (
                                            <ol className="list-inside list-decimal space-y-2 p-4">
                                                {datas.map(data => (
                                                    <li key={data.id}>
                                                        {data.name}
                                                        <div className="space-y-4 py-2">
                                                            {data?.branches.map(
                                                                branch => (
                                                                    <details
                                                                        key={
                                                                            branch.id
                                                                        }
                                                                        className="rounded bg-slate-200 p-2 pl-4">
                                                                        <summary>
                                                                            {
                                                                                branch.name
                                                                            }
                                                                        </summary>
                                                                        <div className="space-y-4 py-2">
                                                                            {branch?.generations.map(
                                                                                generation => (
                                                                                    <details
                                                                                        key={
                                                                                            generation.id
                                                                                        }
                                                                                        className="rounded bg-slate-300 p-2 pl-4">
                                                                                        <summary>
                                                                                            {
                                                                                                generation.name
                                                                                            }
                                                                                            {generation?.knownAs
                                                                                                ? ` - [${generation.knownAs}]`
                                                                                                : ''}
                                                                                        </summary>
                                                                                        <div className="space-y-4 py-2">
                                                                                            {generation.talents.map(
                                                                                                talent => (
                                                                                                    <details
                                                                                                        key={
                                                                                                            talent.id
                                                                                                        }
                                                                                                        className={`${
                                                                                                            talent.status ===
                                                                                                            'graduated'
                                                                                                                ? 'bg-emerald-400'
                                                                                                                : talent.status ===
                                                                                                                  'retired'
                                                                                                                ? 'bg-cyan-400'
                                                                                                                : 'bg-slate-400'
                                                                                                        } rounded p-2 pl-4`}
                                                                                                        open>
                                                                                                        <summary className="font-semibold text-white">
                                                                                                            {
                                                                                                                talent.name
                                                                                                            }
                                                                                                            {talent?.japaneseName
                                                                                                                ? ` - [${talent.japaneseName}]`
                                                                                                                : ''}
                                                                                                            {talent.status !==
                                                                                                            'active'
                                                                                                                ? ` - (${talent.status})`
                                                                                                                : ''}
                                                                                                        </summary>
                                                                                                        <div className="my-2 rounded bg-white p-4">
                                                                                                            <div className="grid grid-cols-3 gap-x-4">
                                                                                                                <img
                                                                                                                    src={
                                                                                                                        talent
                                                                                                                            ?.imagesUrl
                                                                                                                            ?.small
                                                                                                                    }
                                                                                                                    alt={
                                                                                                                        talent.name
                                                                                                                    }
                                                                                                                    className="h-48 w-full"
                                                                                                                />
                                                                                                                <img
                                                                                                                    src={
                                                                                                                        talent
                                                                                                                            ?.imagesUrl
                                                                                                                            ?.medium
                                                                                                                    }
                                                                                                                    alt={
                                                                                                                        talent.name
                                                                                                                    }
                                                                                                                    className="h-48 w-full"
                                                                                                                />
                                                                                                                <img
                                                                                                                    src={
                                                                                                                        talent
                                                                                                                            ?.imagesUrl
                                                                                                                            ?.large
                                                                                                                    }
                                                                                                                    alt={
                                                                                                                        talent.name
                                                                                                                    }
                                                                                                                    className="h-48 w-full"
                                                                                                                />
                                                                                                            </div>
                                                                                                            <div className="mt-2 space-y-2">
                                                                                                                <h5 className="text-xs text-slate-500">
                                                                                                                    Nicknames:{' '}
                                                                                                                    {talent?.nicknames?.join(
                                                                                                                        ', ',
                                                                                                                    )}
                                                                                                                </h5>
                                                                                                                <blockquote className="!mb-3 rounded bg-neutral-100 p-4 text-xl font-semibold italic text-neutral-600 shadow">
                                                                                                                    {
                                                                                                                        talent?.greeting
                                                                                                                    }
                                                                                                                </blockquote>
                                                                                                                <p className="text-sm tracking-wide">
                                                                                                                    {
                                                                                                                        talent?.description
                                                                                                                    }
                                                                                                                </p>
                                                                                                                <div>
                                                                                                                    <h4 className="text-2xl font-bold">
                                                                                                                        Details
                                                                                                                    </h4>
                                                                                                                    <div>
                                                                                                                        <span className="font-semibold">
                                                                                                                            Debut
                                                                                                                            Date:
                                                                                                                        </span>{' '}
                                                                                                                        {
                                                                                                                            talent?.debutedAt
                                                                                                                        }
                                                                                                                    </div>
                                                                                                                    <div>
                                                                                                                        <span className="font-semibold">
                                                                                                                            Age:
                                                                                                                        </span>{' '}
                                                                                                                        {
                                                                                                                            talent?.age
                                                                                                                        }{' '}
                                                                                                                        years
                                                                                                                        old
                                                                                                                    </div>
                                                                                                                    <div>
                                                                                                                        <span className="font-semibold">
                                                                                                                            Birthday:
                                                                                                                        </span>{' '}
                                                                                                                        {
                                                                                                                            talent?.birthday
                                                                                                                        }
                                                                                                                    </div>
                                                                                                                    <div>
                                                                                                                        <span className="font-semibold">
                                                                                                                            Height:
                                                                                                                        </span>{' '}
                                                                                                                        {
                                                                                                                            talent?.height
                                                                                                                        }
                                                                                                                        cm
                                                                                                                    </div>
                                                                                                                    <div>
                                                                                                                        <span className="font-semibold">
                                                                                                                            Oshi
                                                                                                                            Mark:
                                                                                                                        </span>{' '}
                                                                                                                        {talent?.oshiMark?.join(
                                                                                                                            ', ',
                                                                                                                        )}
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </details>
                                                                                                ),
                                                                                            )}
                                                                                        </div>
                                                                                    </details>
                                                                                ),
                                                                            )}
                                                                        </div>
                                                                    </details>
                                                                ),
                                                            )}
                                                        </div>
                                                    </li>
                                                ))}
                                            </ol>
                                        )}
                                    </div>
                                </div>
                                <div>
                                    <h1 className="text-3xl font-bold">
                                        Affiliations
                                    </h1>
                                    <div className="mt-2 rounded bg-slate-100">
                                        <ol className="list-inside list-decimal p-4">
                                            {datas.map(data => (
                                                <li key={data.id}>
                                                    {data.name}
                                                </li>
                                            ))}
                                        </ol>
                                    </div>
                                </div>
                                <div>
                                    <h1 className="text-3xl font-bold">
                                        Branches
                                    </h1>
                                    <div className="mt-2 rounded bg-slate-100">
                                        <ol className="list-inside list-decimal p-4">
                                            {datas.map(data =>
                                                data.branches.map(branch => (
                                                    <li key={branch.id}>
                                                        {branch.name}
                                                    </li>
                                                )),
                                            )}
                                        </ol>
                                    </div>
                                </div>
                                <div>
                                    <h1 className="text-3xl font-bold">
                                        Generations
                                    </h1>
                                    <div className="mt-2 rounded bg-slate-100">
                                        <ol className="list-inside list-decimal p-4">
                                            {datas.map(data =>
                                                data.branches.map(branch =>
                                                    branch.generations.map(
                                                        generation => (
                                                            <li
                                                                key={
                                                                    generation.id
                                                                }>
                                                                {branch.name}{' '}
                                                                {
                                                                    generation.name
                                                                }
                                                            </li>
                                                        ),
                                                    ),
                                                ),
                                            )}
                                        </ol>
                                    </div>
                                </div>
                                <div>
                                    <h1 className="text-3xl font-bold">
                                        Talent
                                    </h1>
                                    <div className="mt-2 rounded bg-slate-100">
                                        <ol className="list-inside list-decimal p-4">
                                            {datas.map(data =>
                                                data.branches.map(branch =>
                                                    branch.generations.map(
                                                        generation =>
                                                            generation.talents.map(
                                                                talent => (
                                                                    <li
                                                                        key={
                                                                            talent.id
                                                                        }>
                                                                        {
                                                                            talent.name
                                                                        }
                                                                    </li>
                                                                ),
                                                            ),
                                                    ),
                                                ),
                                            )}
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    )
}

export default Dashboard
