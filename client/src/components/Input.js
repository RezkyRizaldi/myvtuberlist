const Input = ({ disabled = false, className, ...props }) => (
    <input
        disabled={disabled}
        className={`${className} rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200/50 active:border-indigo-300 active:ring active:ring-indigo-200/50`}
        {...props}
    />
)

export default Input
