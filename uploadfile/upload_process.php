<?php
/*
使い方

//引数にアップロード先のディレクトリを指定することもできる
$up=new Uploader("http://  ","../../uploads/");
if($error=$up->addFile($_FILES['upload_file'])){ echo $error;}
if($error=$up->addFile($_FILES['upload_file2'])){ echo $error;}
foreach($urls=$up->upload() as $url){
	echo $url;
}


*/
class Uploader{

	public $abs_upload_dir;
	public $rel_upload_dir;
	public $files;
	//引数にファイルをアップロードするディレクトリを指定することもできる。省略するとデフォルトの場所へアップロード
	public function __construct($ab_dir,$re_dir){
		$this->files=array();
		$this->abs_upload_dir=$ab_dir;
		$this->rel_upload_dir=$re_dir;
	}
	//ファイルが有効なものであればfalseを返す。そうでなければエラーメッセージを返す。
	//有効であれば、ファイルスタックにファイルを追加。
	public function addFile($file){
		switch ($file['error']) {
        case UPLOAD_ERR_OK: // OK
        break;
        case UPLOAD_ERR_NO_FILE:
        return 'ファイルが選択されていません';
        break;
        case UPLOAD_ERR_INI_SIZE: 
        case UPLOAD_ERR_FORM_SIZE: 
        return 'ファイルサイズが大きすぎます';
        break;
        default:
        return 'その他のエラーが発生しました';}
        if (!$ext = array_search(mime_content_type($file['tmp_name']),array('jpg' => 'image/jpeg','png' => 'image/png'),true)) {
        	return 'ファイル形式が不正です';
        }
        array_push($this->files,$file);
        return false;
    }
    //ファイルスタックに入ったファイルをまとめてアップロードし、アップロード先のurlを配列で返す。
    public function uploadFile(){
    	reset($this->files);
    	$url=array();
    	foreach($this->files as $file){
    		$img=null;
    		if($file['type']==='image/png'){
    			$img=imagecreatefrompng($file['tmp_name']);
    		}else if($file['type']==='image/jpeg'){
    			$img=imagecreatefromjpeg($file['tmp_name']);
    		}
    		$filename=sprintf('%s_%s.%s',time(),sha1(uniqid(mt_rand(),true)),'jpg');
    		if(imagejpeg($img,$this->rel_upload_dir.$filename,50)){
    			array_push($url,$this->abs_upload_dir.$filename);
    		}

    	}
    	return $url;
    }
}

?>