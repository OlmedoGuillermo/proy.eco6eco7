<?php

public function up()
{
    Schema::create('tareas', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->boolean('completada')->default(false);
        $table->timestamps();
    });
}
Después corré la migración:
php artisan migrate