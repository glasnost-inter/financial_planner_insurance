/*select kd_produk_skema_klaim,
       KD_PRODUK_SKEMA,
       kd_benefit,
       CASE kd_benefit 
       WHEN 'NT' THEN
	nilai_berhenti
       WHEN 'BSW' THEN
	nilai_beasiswa
       WHEN 'JAMCAT' THEN
	nilai_cacat
       WHEN 'JAMKEMAK' THEN
	nilai_MENINGGAL       
       END nilai_klaim
from produk_skema_klaim_benefit A,KLIEN B
where kd_produk_skema_klaim LIKE 'JSPE%'
AND B.ID_KLIEN = '1' 


select 12 * (YEAR(tgl_akhir_masa) - YEAR(tgl_expirasi)) + (MONTH(tgl_akhir_masa) - MONTH(tgl_expirasi)) AS months
from klien

SELECT * FROM klien

CALL gen_jadwal_bsw(1)

DROP PROCEDURE `simulasi`.`gen_jadwal_bsw`

SELECT * FROM benefit_klaim
*/


DROP PROCEDURE `simulasi`.`gen_jadwal_bsw`