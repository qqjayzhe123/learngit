<?php 
class verifycode{
	public $width;
	public $height;
	public $type;
	public function __construct($width=130,$height=40,$type=1){
      $this->width=$width;//当前累中的widte赋值
      $this->height=$height;//当前累中的height赋值
      $this->type=$type;//当前累中的type赋值
	}
	public function code(){
	header('content-type:image/jpeg');//请求页面的内容是jpeg格式的图像
	$img=imagecreatetruecolor($this->width,$this->height); //返回一个大小为 x_size 和 y_size 的黑色图像
	$green=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));//设置生成数字颜色随机
	$arr=array_merge(range(0,9),range('a','z'),range('A','Z'));//array_merge:两个数组合并为一个数组//range() 函数创建一个包含指定范围的元素的数组。
	shuffle($arr);//把数组中的元素按随机顺序重新排序：
	$arr=array_slice($arr, 0,4);//array_slice() 函数在数组中根据条件取出一段值。//取出四个元素
	$str=join($arr,' ');//把数组元素组合为一个字符串：
imagerectangle($img,0,0,$this->width,$this->height,$green);//本函数可在图片上绘出长方形。参数 x1、y1 及 x2、y2 分别为矩形对角线的坐标
	for($i=1;$i<=10;$i++){
		imagearc($img,mt_rand(0,$this->width),mt_rand(0,$this->height),60,60,mt_rand(0,360),mt_rand(0,360),$green);
		//imagearc()用来画弧线。原点坐标 (0,0) 为图片的左上角，参数 cx、cy 为椭圆心坐标，参数 w 为水平轴长，参数 h 为垂直轴长，参数 s 及 e 分别为起始角与结束角，参数 col 为弧线的颜色。参数 im 表示图形的 handle。
	}
	for($i=1;$i<=50;$i++){
		imagesetpixel($img,mt_rand(0,$this->width),mt_rand(0,$this->height),$green);
		//可在图片上绘出一点。参数 x、y 为欲绘点的坐标，参数 col 表示该点的颜色。

	}
	imagettftext($img, 16, 0, 20, $this->height-10, $green, 'mimi.ttf', $str);//本函数将 TTF (TrueType Fonts) 字型文字写入图片。参数 size 为字形的尺寸；angle 为字型的角度，顺时针计算，0 度为水平，也就是三点钟的方向 (由左到右)，90 度则为由下到上的文字；x,y 二参数为文字的坐标值 (原点为左上角)；参数 col 为字的颜色；fontfile 为字型文件名称，亦可是远端的文件；text 当然就是字符串内容了。返回值为数组，包括了八个元素，头二个分别为左下的 x、y 坐标，第三、四个为右下角的 x、y 坐标，第五、六及七、八二组分别为右上及左上的 x、y 坐标。
	imagejpeg($img);//imagejpeg() 从 image 图像以 filename 为文件名创建一个 JPEG 图像。image 参数是 imagecreatetruecolor() 函数的返回值。filename 参数为可选，如果省略，则原始图像流将被直接输出。要省略 filename 参数而提供 quality 参数，使用空字符串（''）。通过 header() 发送 Content-type: image/jpeg 可以使 PHP 脚本直接输出 JPEG 图像。

	}
	
}
$code=new verifycode();
$code->code(60,20);
 ?>
