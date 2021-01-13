<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsReceivedTable extends Migration
{
    /**
     * @var string
     */
    protected $tableName = 'contacts_received';

    /**
     * Run the migrations.
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 09/01/2021 08:12
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tableName)) {
            Schema::create($this->tableName, function (Blueprint $table) {
                $table->id();
                $table->string('name',100)->comment('nome de quem mandou o contato');
                $table->string('ip',20)->comment('ip de quem mandou o contato');
                $table->string('email',100)->comment('email de quem mandou o contato');
                $table->string('subject',100)->comment('assunto do contato');
                $table->string('ddi_ddd_phone',20)->comment('telefone de quem mandou o contato');
                $table->string('message',800)->comment('mesagem do contato');
                $table->string('fileUrl',200)->comment('arquivo do contato');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 09/01/2021 08:12
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
