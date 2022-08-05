import { XIcon } from '@heroicons/react/solid'

import Button from './Button'
import Input from './Input'
import Label from './Label'

const Form = ({
    formik,
    nicknames,
    input,
    setInput,
    setImage,
    deleteNickname,
    handleKeyDown,
    handleKeyUp,
}) => {
    return (
        <>
            <form onSubmit={formik.handleSubmit} encType="multipart/form-data">
                <div className="grid grid-cols-3 gap-x-5">
                    <div>
                        <Label htmlFor="name">Name</Label>
                        <Input
                            id="name"
                            type="text"
                            name="name"
                            className={`${
                                formik.errors['name']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : ''
                            }mt-1 block w-full`}
                            required
                            autoFocus
                            value={formik.values.name}
                            onChange={formik.handleChange}
                        />
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['name']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="original_name">Original Name</Label>
                        <Input
                            id="original_name"
                            type="text"
                            name="original_name"
                            className={`${
                                formik.errors['original_name']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : ''
                            }mt-1 block w-full`}
                            value={formik.values.original_name}
                            onChange={formik.handleChange}
                        />
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['original_name']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="nicknames">Nicknames</Label>
                        <div className="mt-1 flex w-full overflow-auto rounded-md border border-gray-300 bg-gray-300 shadow-sm">
                            {nicknames.length > 0 &&
                                nicknames.map((nickname, index) => (
                                    <div
                                        key={index}
                                        className="m-1.5 ml-0 flex gap-x-1.5 whitespace-nowrap rounded-md border border-yellow-500 bg-yellow-500 px-1.5 py-0.5 text-white first:ml-1.5">
                                        {nickname}
                                        <button
                                            className="border-none bg-transparent text-white"
                                            type="button"
                                            onClick={() =>
                                                deleteNickname(index)
                                            }>
                                            <XIcon className="inline-flex h-3 w-3 items-center" />
                                        </button>
                                    </div>
                                ))}
                            <Input
                                id="nicknames"
                                type="text"
                                name="nicknames"
                                className={`${
                                    nicknames.length > 0 ? 'pl-0 ' : ''
                                }border-none read-only:bg-gray-300 focus:outline-none focus:ring-0 active:border-none active:ring-0`}
                                onKeyDown={handleKeyDown}
                                onKeyUp={handleKeyUp}
                                value={input}
                                readOnly
                                onChange={e => setInput(e.target.value)}
                            />
                        </div>
                    </div>
                    <div>
                        <Label htmlFor="description">Description</Label>
                        <Input
                            id="description"
                            type="text"
                            name="description"
                            className={`${
                                formik.errors['description']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : ''
                            }mt-1 block w-full`}
                            value={formik.values.description}
                            onChange={formik.handleChange}
                        />
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['description']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="images_url">Images</Label>
                        <Input
                            id="images_url"
                            type="file"
                            accept="image/*"
                            className="mt-1 block w-full border file:mr-4 file:rounded-md file:border-0 file:px-3 file:py-2 file:font-semibold focus:outline-none"
                            onChange={e => setImage(e.target.files[0])}
                        />
                    </div>
                    <div>
                        <Label htmlFor="debuted_at">Debut Date</Label>
                        <Input
                            id="debuted_at"
                            type="date"
                            name="debuted_at"
                            className={`${
                                formik.errors['debuted_at']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : ''
                            }mt-1 block w-full`}
                            value={formik.values.debuted_at}
                            onChange={formik.handleChange}
                        />
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['debuted_at']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="status">Status</Label>
                        <select
                            id="status"
                            name="status"
                            className={`${
                                formik.errors['status']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : 'border-gray-300 focus:border-indigo-300 focus:ring-indigo-200/50 '
                            }w-full mt-1 block rounded-md shadow-sm focus:ring`}
                            value={formik.values.status}
                            onChange={formik.handleChange}>
                            <option defaultValue="active">Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                            <option value="retired">Retired</option>
                        </select>
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['status']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="gender">Gender</Label>
                        <select
                            id="gender"
                            name="gender"
                            className={`${
                                formik.errors['gender']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : 'border-gray-300 focus:border-indigo-300 focus:ring-indigo-200/50 '
                            }w-full mt-1 block rounded-md shadow-sm focus:ring`}
                            value={formik.values.gender}
                            onChange={formik.handleChange}>
                            <option defaultValue="female">Select Gender</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['gender']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="age">Age</Label>
                        <Input
                            id="age"
                            type="number"
                            name="age"
                            className={`${
                                formik.errors['age']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : ''
                            }mt-1 block w-full`}
                            value={formik.values.age}
                            onChange={formik.handleChange}
                        />
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['age']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="birthday">Birthday</Label>
                        <Input
                            id="birthday"
                            type="date"
                            name="birthday"
                            className={`${
                                formik.errors['birthday']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : ''
                            }mt-1 block w-full`}
                            value={formik.values.birthday}
                            onChange={formik.handleChange}
                        />
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['birthday']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="height">Height</Label>
                        <Input
                            id="height"
                            type="number"
                            name="height"
                            className={`${
                                formik.errors['height']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : ''
                            }mt-1 block w-full`}
                            value={formik.values.height}
                            onChange={formik.handleChange}
                        />
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['height']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="emoji">Emoji</Label>
                        <Input
                            id="emoji"
                            type="text"
                            name="emoji"
                            className={`${
                                formik.errors['emoji']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : ''
                            }mt-1 block w-full`}
                            value={formik.values.emoji}
                            onChange={formik.handleChange}
                        />
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['emoji']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="affiliation">Affiliation</Label>
                        <select
                            required
                            id="affiliation"
                            name="affiliation"
                            className={`${
                                formik.errors['affiliation']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : 'border-gray-300 focus:border-indigo-300 focus:ring-indigo-200/50 '
                            }w-full mt-1 block rounded-md shadow-sm focus:ring`}
                            value={formik.values.affiliation}
                            onChange={formik.handleChange}>
                            <option defaultValue="1">Select Affiliation</option>
                            <option value="1">hololive</option>
                            <option value="2">NIJISANJI</option>
                        </select>
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['affiliation']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="branch">Branch</Label>
                        <select
                            required
                            id="branch"
                            name="branch"
                            className={`${
                                formik.errors['branch']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : 'border-gray-300 focus:border-indigo-300 focus:ring-indigo-200/50 '
                            }w-full mt-1 block rounded-md shadow-sm focus:ring`}
                            value={formik.values.branch}
                            onChange={formik.handleChange}>
                            <option defaultValue="1">Select Branch</option>
                            <option value="1">ID</option>
                            <option value="2">EN</option>
                        </select>
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['branch']}
                            </div>
                        )}
                    </div>
                    <div>
                        <Label htmlFor="generation">Generation</Label>
                        <select
                            required
                            id="generation"
                            name="generation"
                            className={`${
                                formik.errors['generation']
                                    ? 'border-red-500 focus:border-red-300 focus:ring-red-300/50 '
                                    : 'border-gray-300 focus:border-indigo-300 focus:ring-indigo-200/50 '
                            }w-full mt-1 block rounded-md shadow-sm focus:ring`}
                            value={formik.values.generation}
                            onChange={formik.handleChange}>
                            <option defaultValue="1">Select Generation</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                        {formik.errors && (
                            <div className="mt-2 text-sm text-red-500">
                                {formik.errors['generation']}
                            </div>
                        )}
                    </div>
                </div>
                <div className="mt-2 flex items-center justify-end">
                    <Button
                        className={
                            !(formik.isValid && formik.dirty)
                                ? 'bg-gray-900'
                                : ''
                        }
                        disabled={!(formik.isValid && formik.dirty)}>
                        {formik.values.id ? 'Update' : 'Save'}
                    </Button>
                </div>
            </form>
        </>
    )
}

export default Form
