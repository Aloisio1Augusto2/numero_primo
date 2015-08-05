# numero_primo
<?php
//exemplo com o numero 10.
$numero = 10;

if (gmp_prob_prime($numero)) {
	print 'É primo';
} else {
	print 'Não é primo';
}

?>
