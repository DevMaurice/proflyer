<?php

namespace App\Http\Requests;

use App\Flyer;
use App\Http\Requests\Request;

class CreateFlyerPhotoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Flyer::where([
            'street' => $this->street,
            'zip' => $this->zip,
            'user_id' => $this->user()->id
            ])->exists();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'photo' => 'mimes:jpg,jpeg,png,bmp'
        ];
    }
}
