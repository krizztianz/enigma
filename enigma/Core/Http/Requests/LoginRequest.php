<?php
namespace Enigma\Modules\Core\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8|alpha_num',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required'        => 'Email harus diisi!',
            'email.email'           => 'Format email tidak tepat!',
            'email.unique'          => 'Alamat email sudah digunakan!',
            'password.required'     => 'Password harus diisi!',
            'password.min'          => 'Password minimal 8 karakter!',
            'password.alpha_num'    => 'Format harus terdiri dari huruf dan angka!',
        ];
    }
}
