@php
// SDK de Mercado Pago
require base_path("vendor/autoload.php'");
// Agrega credenciales
MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75;
$preference->items = array($item);
$preference->save();
@endphp


<script src="https://sdk.mercadopago.com/js/v2"></script>

<script>
  // Agrega credenciales de SDK
  const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
    locale: "es-AR",
  });

  // Inicializa el checkout
  mp.checkout({
    preference: {
      id: '{{ $preference->id}}',
    },
    render: {
      container: ".cho-container", // Indica el nombre de la clase donde se mostrará el botón de pago
      label: "Pagar", // Cambia el texto del botón de pago (opcional)
    },
  });
</script>

