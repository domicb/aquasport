<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style>
    #formulario_imagenes{
        width: 600px;
        padding: 20px 0px 20px 120px;
        margin: 100px 0px 0px 350px;
        background-color: darkgray;
        color: #fff;
    }
    label{
        display: block;
    }
    input[type=text],input[type=file]{
        padding: 10px;
        width: 300px;
        background-color: #444;
        color: #fff;
        font-weight: bold;
    }
    input[type=submit]{
        padding: 10px;
        width: 150px;
        background-color: #111;
        color: #fff;
        font-weight: bold; 
    }
</style>
</head>

<body>
    <!--$ERROR MUESTRA LOS ERRORES QUE PUEDAN HABER AL SUBIR LA IMAGEN-->
    <?=@$error?>
<div id="formulario_imagenes">
    <span><?php echo validation_errors(); ?></span>
<?=form_open_multipart(base_url()."index.php/Upload/do_upload")?>
    <label>Título:</label><input type="text" name="titulo" />
        <label>Categoria:</label>
        <select name="categoria" class="form-control">
                            <option></option>
                            <option value='noticias'>Noticias</option>
                            <option value='articulos'>Articulos</option>
                            <option value='deportes'>Deportes</option>
        </select>
    <label>Autor:</label><input type="text" name="autor" />
    <label>Cuerpo:</label><textarea rows="12" cols="60" wrap="soft" name="cuerpo">Texto que aparece ya escrito de antemano</textarea>
    <label>Imagen principal:</label><input type="file" name="userfile" /><br /><br />
    <input type="submit" value="Subir artículo" />
<?=form_close()?>
</div>
</body>
</html>
