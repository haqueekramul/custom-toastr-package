namespace Ekramul\CustomToastr;

class Toastr
{
    public static function render(string $message, string $type = 'success', array $options = [])
    {
        $defaultOptions = config('customtoastr');
        $options = array_merge($defaultOptions, $options);

        return view('customtoastr::toast', [
            'message' => $message,
            'type' => $type,
            'options' => $options,
        ])->render();
    }
}
