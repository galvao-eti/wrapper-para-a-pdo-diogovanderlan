<?php

require  " ../autoload.php ";
use Turma3\Wrapper;


$categoria =  new Wrapper();

	if($_POST){
		
		$categoria = $_POST['categoria'];
		$wrapper->include($categoria);
		
	}
	 public function update($param){
        $sql = "UPDATE $this->table SET nome = ? WHERE id = ? LIMIT 1";
        $update = $this->preparar($sql);
        $update->bindValue(1, $this->getNome());
        $update->bindValue(2, $param);
        if( $update->execute() ){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function delete($param){
        $sql = "DELETE FROM $this->table WHERE id = ? LIMIT 1";
        $delete = $this->preparar($sql);
        $delete->bindParam(1, $param);
        if( $delete->execute() ){
            return TRUE;
        }else {
            return FALSE;
        }
       
    }
?>



<form method="post">

	<div class="container">
        <div class="row">
                    <legend>Alteração de Categoria</legend>
                        
                    <input type="hidden" name="id" value="{{ id }}">

                    <div class="form-group">
                        <label>Nome da Categoria</label>
                        <input type="text" name="nome" placeholder="Nome da Categoria" value="{{ nome }}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                
                    <h3>Selecione uma categoria para  excluir</h3>
                
            
        </div>
    </div>

	<input type="text" name="categoria">
	<button type="submit" title="enviar"></button>

</form>