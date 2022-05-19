<?php

namespace App\Http\Requests\Filters;

use App\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Http\FormRequest;

class OfferFilterRequest extends FormRequest implements Filter
{
    public function filter(Builder $builder)
    {
        foreach ($this->all() as $key => $value) {
            if (empty($value)) {
                continue;
            }

            switch ($key) {
                case 'name':
                    $builder->where('name', 'like', "%{$value}%");
                    break;
                default:
                    break;
            }
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [];
    }
}
