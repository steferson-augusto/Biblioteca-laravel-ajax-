<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmprestimoLivros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimo_livros', function (Blueprint $table) {
   			$table->integer('id_livro')->unsigned();
			$table->foreign('id_livro')->references('id')->on('livros');
			$table->integer('id_emprestimo')->unsigned();
			$table->foreign('id_emprestimo')->references('id')->on('emprestimos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimo_livros');
    }
}
