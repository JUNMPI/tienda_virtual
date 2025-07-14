<?php 
	const BASE_URL = "http://localhost/tienda_virtual";
	//const BASE_URL = "https://abelosh.com/tiendavirtual";

	//Zona horaria
	date_default_timezone_set('America/Lima');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/.";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AVEmDmTvXkcHFZvBfp8eHA1T5WOg2Zc6trCD5xCvJRTbcy5CdeIJFt0LCkIZ6tlWEX2pq0meEZQxcyA6";
	const SECRET = "EEH6-KcGNYy0IqoxDn3UOxXD5uUeAdtq7lLq9dzPG6ttWwS6dEjxYgTWbhCbh42DQ8EgJIQzJhC25JdK"; 
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Facherito Shop";
	const EMAIL_REMITENTE = "junioralvines1005@gmail.com";
	const NOMBRE_EMPESA = "Facherito Shop";
	const WEB_EMPRESA = "www.facherito.com";

	const DESCRIPCION = "La mejor tienda en línea con artículos de moda para hombre.";
	const SHAREDHASH = "FacheritoShop";

	//Datos Empresa
	const DIRECCION = "Avenida San José 1233, Chiclayo";
	const TELEMPRESA = "+(51)954316648";
	const WHATSAPP = "+50278787845";
	const EMAIL_EMPRESA = "facheritoShop@gmail.com";
	const EMAIL_PEDIDOS = "junioralvines1005@gmail.com"; 
	const EMAIL_SUSCRIPCION = "junioralvines1005@gmail.com";
	const EMAIL_CONTACTO = "junioralvines1005@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/JuniorAlvines";
	const INSTAGRAM = "https://www.instagram.com/JuniorAlvines/";
	

 ?>