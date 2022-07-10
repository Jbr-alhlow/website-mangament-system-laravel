php

use IlluminateSupportFacadesSchema;
use IlluminateDatabaseSchemaBlueprint;
use IlluminateDatabaseMigrationsMigration;

class CreateInboxTble extends Migration
{
    
      Run the migrations.
     
      @return void
     
    public function up()
    {
        Schemacreate('inbox', function (Blueprint $table) {
            $table-bigIncrements('id');
            $table-string('name');
            $table-string('email');
            $table-string('phone');
            $table-string('body');
            $table-timestamps();
        });
    }

    
      Reverse the migrations.
     
      @return void
     
    public function down()
    {
        SchemadropIfExists('inbox_tble');
    }
}
