<?php

namespace Tests\Feature;

use App\Mail\ContactReceived as ContactReceivedMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

/**
 * assert all process of contacts received.
 * Created by Weslley Ribeiro
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Class ContactReceivedTest
 * @package Tests\Feature
 */
class ContactReceivedTest extends TestCase
{
    use WithoutMiddleware,RefreshDatabase;

    /**
     * verifica se recebo o erro esperado quando não sigo a regra required dos input's
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 14/01/2021 21:01
     */
    public function testSendContactWithoutInputsTest()
    {
        $response = $this->post('/api/v1/contactsReceived');
        $response->assertStatus(422);
    }

    /**
     * verifica toda a funcionalidade de criar um contato
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 15/01/2021 02:58
     */
    public function testPostContactReceivedTest()
    {
        //fila fake
        Queue::fake();
        //cria arquivo fake no diretorio de arquivos de teste
        Storage::fake('public');
        $file = UploadedFile::fake()->create('meuarquivo.pdf',500,'application/pdf');
        //monta o objeto
        $data = [
            'contact_name' => $this->faker->name,
            'contact_email' => $this->faker->email,
            'contact_telephone' => $this->faker->phoneNumber,
            'contact_subject' => $this->faker->sentence(),
            'contact_message' => $this->faker->realText(),
            'contact_attachment' => $file
        ];

        //envia o mesmo objeto do front e verifica se criou ou não
        $response = $this->json('POST',route('contactsReceived.store'), $data);

        //codigo de criado
        $response->assertStatus(201);
    }
}
