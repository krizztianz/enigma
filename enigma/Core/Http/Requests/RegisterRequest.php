<?php
namespace Enigma\Modules\Core\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'         => 'required|max:128',
            'organization' => 'required|max:128',
            'email'        => 'required|email|unique:users,email',
            'password'     => 'required|min:8|alpha_num',
            'confirm'      => 'same:password',
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
            'name.required'         => 'Nama anda harus diisi!',
            'name.max'              => 'Maksimal panjang karakter adalah 128 karakter!',
            'organization.required' => 'Nama organisasi harus diisi!',
            'organization.max'      => 'Maksimal panjang karakter adalah 128 karakter!',
            'email.required'        => 'Email harus diisi!',
            'email.email'           => 'Format email tidak tepat!',
            'email.unique'          => 'Alamat email sudah digunakan!',
            'password.required'     => 'Password harus diisi!',
            'password.min'          => 'Password minimal 8 karakter!',
            'password.alpha_num'    => 'Format harus terdiri dari huruf dan angka!',
            'confirm.same'          => 'Password tidak cocok!'
        ];
    }
}
