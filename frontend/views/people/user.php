<?php
use yii\helpers\Url;
$absoluteBaseUrl = Url::base(true);
?>
<table class="table">

    <tbody>
<?php
    foreach($data as $key => $value)
    {
        if($key == 'role'){
            switch ($value) {
                case 1:
                    $value = 'Адмиристратор';
                    break;
                case 2:
                    $value = 'Модератор';
                    break;
                case 3:
                    $value = 'Гость';
                    break;
            }
        }
        if ($key == 'photo')
        {
            $value = '<a href=/img/'.$value.'> foto</a>';
        }
        if ($key == 'vk')
        {
            $value = '<a href='.$value.'> profile vk</a>';
        }
        if ($key == 'date')
        {
            $value = date('Y-m-d H:i:s', $value);
        }

        echo '<tr class="success">'.'<td>'.$key.'</td><td>'.$value.'</td>';
    }
?>
    </tbody>
  </table>

<a href="<?php echo $absoluteBaseUrl?>/people/all" class="btn btn-primary">go back</a>