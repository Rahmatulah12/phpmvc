<?php

class FlashMessage
{
    public static function setMessage($pesan, $aksi, $type)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'type' => $type
        ];
    }

    public static function flash()
    {
        if(isset($_SESSION['flash']))
        {
            echo '<div class="alert alert-'. $_SESSION["flash"]["type"] .' alert-dismissible fade show" role="alert"><strong>'
            . $_SESSION["flash"]["pesan"] .
            ' ' . $_SESSION['flash']['aksi'] .
            '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
            unset($_SESSION["flash"]);
        }
    }
}