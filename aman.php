<?php

$notifikasi_aman= "SELECT mitigasi_cahaya.aman,mitigasi_pompa.aman,mitigasi_tinggiair.aman FROM (mitigasi_cahaya aman left JOIN mitigasi_pompa aman on mitigasi_cahaya.waktu = mitigasi_tinggiair.waktu) left JOIN mitigasi_tinggiair.aman on mitigasi_cahaya.waktu = mitigasi_tinggiair.waktu "

?>