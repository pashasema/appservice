<?php 
function write_acf($data){
	$value=get_field($data[0]);
	$label=$data[1];
	if($value){
		?>
		<p class="custom-page__item"><b class="custom-page__name"><?php echo $label; ?>: </b><?php echo $value; ?></p><?php
	}
}

function write_tax($data){
	$id=$data[0];
	$tax=$data[1];
	$tax_name=$data[2];
	$termini = get_the_terms($id, $tax ); 
	if(is_array($termini)){
		?>
		<p class="custom-page__item"><b class="custom-page__name"><?php echo $tax_name; ?>: </b><?php 
		foreach( $termini as $termin ){
			echo $termin->name . ' ';
		}
	}
	?>
</p>
<?php
}

add_action( 'tax_hook', 'write_tax' );
add_action( 'acf_hook', 'write_acf' );