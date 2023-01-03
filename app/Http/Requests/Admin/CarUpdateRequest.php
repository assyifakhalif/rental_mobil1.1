<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CarUpdateRequest extends FormRequest
{
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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_mobil' => 'required',
            'harga_sewa' => 'required',
            'bahan_bakar' => 'required',
            'jumlah_kursi' => 'required',
            'transmisi' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'p3k' => 'required',
            'charger' => 'required',
            'audio' => 'required',
            'ac' => 'required',
        ];
    }
}
