<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $page
 * @property string $component
 * @property string $status
 * @property array|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Element> $children
 * @property-read int|null $children_count
 * @property-read Element|null $parent
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Element filter(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Element newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Element newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Element onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Element query()
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereComponent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element wherePage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Element withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Element withoutTrashed()
 *
 * @mixin \Eloquent
 */
class Element extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['page', 'component', 'status', 'content'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $casts = [
        'content' => 'array',
    ];

    /**
     * Get the parent element.
     */
    public function parent()
    {
        return $this->belongsTo(Element::class, 'parent_id');
    }

    /**
     * Get the child elements.
     */
    public function children()
    {
        return $this->hasMany(Element::class, 'parent_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $search = strtolower($search).'%';
            $query
                ->whereRaw('LOWER(heading) LIKE ?', [$search])
                ->orWhereRaw('LOWER(page) LIKE ?', [$search])
                ->orWhereRaw('LOWER(component) LIKE ?', [$search]);
        });
    }
}
