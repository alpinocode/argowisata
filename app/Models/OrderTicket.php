<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class OrderTicket extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'telepon',
        'alamat',
        'tanggal_pesan',
        'waktu_pesan',
        'jumlah_tiket',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
