<?php
return array (
  'default' => 
  array (
    'type' => 'sendmail',
    'command' => '',
  ),
  'kakhramond@tashschool.org' => 
  array (
    'type' => 'sendmail',
    'command' => '',
    'dkim' => true,
    'dkim_pvt_key' => '-----BEGIN PRIVATE KEY-----
MIICdgIBADANBgkqhkiG9w0BAQEFAASCAmAwggJcAgEAAoGBALpgDjr51A1pgUh4
vk0hd7d4kYxcq6MiS3ubsZHlDoSL+2F2mN2ijv5AIEiGB8WivkAM+OHoKD2sjYNi
SRBwVdUPwiI4El51sFI+pi5JOIMBL34oJa/w8/3yVKPxvreT1LzheJuDpKcMo0Ak
OT3hPfN5/XO6nxLPuCWNChn9oOppAgMBAAECgYAnA6qW7+tS724P1K7JiKL99jBJ
uLB5UtmIQ5xVVSTH3GHAEkqHwtq6IIRhiiUgWyQGVnDXIXkjB/cLtMxks49T0gbL
1gMVqvyF+17m9hW4jvlLBulQOPsS+Mm0D2THYhCwWEnCVD1q9uCf3iLgAH0yj28/
oeFqEFwyaqcT2fdCDQJBAOZvhxwuDp1DQ87DlzV3NPY9I4UA+x6qlmesfdC3dKhI
Z9gGsrDQHogNVKn+44pjYa/QGGEAPfyLyKKT0gbF1V8CQQDPDTE7+GVz4YjGkGxA
i66T8/o8Dsv0ZGNYfEgR+PjJLLWaqDfLM/B3+p2E9l76mAHoTGM46HwBnSGKsDr+
nc03AkBAvDYdoYazgVEMRgA1oe57+oL++16Qp+Wm7FtQBim8mNKran5Kk7zwBaay
NwvfNboctP4USggf6XkMyzAmfO9LAkAQoW6i8oCznhnuWQtY499R4vbmfAnFx4pz
QQhI6UaSYhT0Jy7UE4ftGyQr2d4nIq6Eih4uI/5R4t0e1qjmaqZhAkEAjoDR4X6N
2dJbDPvOYpd58CvpoIl1EWNeo3QHm0tzDrTNA1q8gi5wFGP8yAIYhWQhiAu2IIPX
PHJVI3E+u375dA==
-----END PRIVATE KEY-----',
    'dkim_pub_key' => '-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC6YA46+dQNaYFIeL5NIXe3eJGM
XKujIkt7m7GR5Q6Ei/thdpjdoo7+QCBIhgfFor5ADPjh6Cg9rI2DYkkQcFXVD8Ii
OBJedbBSPqYuSTiDAS9+KCWv8PP98lSj8b63k9S84Xibg6SnDKNAJDk94T3zef1z
up8Sz7gljQoZ/aDqaQIDAQAB
-----END PUBLIC KEY-----',
    'dkim_selector' => 'kakhramondwamail',
  ),
);
