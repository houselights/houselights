<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreateEventTicketForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreateEventTicketFormTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreateEventTicketForm::class)
            ->assertStatus(200);
    }
}
