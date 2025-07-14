# 🛍️ Tienda Virtual Facherito Shop

## 📋 Descripción del Proyecto

**Facherito Shop** es una tienda virtual elegante especializada en moda "Old Money" para hombres y mujeres. El sistema ofrece una experiencia de compra completa con gestión administrativa, carrito de compras, procesamiento de pagos y panel de administración.

## ✨ Características Principales

### 🏪 Tienda Online
- **Catálogo de productos** organizado por categorías
- **Sistema de búsqueda** avanzado con filtros
- **Carrito de compras** interactivo
- **Proceso de checkout** simplificado
- **Integración con PayPal** y pagos contra entrega
- **Sistema de usuarios** con registro y autenticación

### 👨‍💼 Panel Administrativo
- **Dashboard** con métricas y gráficos
- **Gestión de productos** con imágenes múltiples
- **Administración de categorías**
- **Control de usuarios y roles**
- **Seguimiento de pedidos**
- **Generación de facturas** en PDF
- **Sistema de permisos** granular

### 📊 Funcionalidades Avanzadas
- **Reportes de ventas** con gráficos interactivos
- **Gestión de suscriptores**
- **Sistema de contacto**
- **Páginas CMS** editables
- **Notificaciones por email**
- **Responsive design**

## 🚀 Tecnologías Utilizadas

### Backend
- **PHP 8.2+** con arquitectura MVC personalizada
- **MySQL/MariaDB** como base de datos
- **Apache** con mod_rewrite
- **Composer** para gestión de dependencias

### Frontend
- **HTML5, CSS3, JavaScript**
- **Bootstrap 4** para diseño responsive
- **jQuery** para interactividad
- **DataTables** para tablas dinámicas
- **Highcharts** para gráficos
- **SweetAlert** para notificaciones

### Librerías Principales
- **PHPMailer** - Envío de emails
- **html2pdf (Spipu)** - Generación de PDFs
- **TinyMCE** - Editor WYSIWYG
- **PayPal SDK** - Procesamiento de pagos

## 📦 Instalación

### Prerrequisitos
- PHP 8.2 o superior
- MySQL 5.7+ o MariaDB 10.3+
- Apache con mod_rewrite habilitado
- Composer

### Pasos de Instalación

1. **Clonar el repositorio**
```bash
git clone https://github.com/tu-usuario/tienda-virtual.git
cd tienda-virtual
```

2. **Instalar dependencias**
```bash
composer install
```

3. **Configurar la base de datos**
```bash
# Crear la base de datos
mysql -u root -p
CREATE DATABASE db_tiendavirtual;

# Importar el schema
mysql -u root -p db_tiendavirtual < db_tiendavirtual.sql
```

4. **Configurar variables de entorno**
```php
// Config/Config.php
const BASE_URL = "http://localhost/tienda_virtual";
const DB_HOST = "localhost";
const DB_NAME = "db_tiendavirtual";
const DB_USER = "root";
const DB_PASSWORD = "";
```

5. **Configurar servidor web**
```apache
# Asegurar que mod_rewrite esté habilitado
# El archivo .htaccess ya está configurado
```

## 🔧 Configuración

### Configuración de PayPal
```php
// Para sandbox (desarrollo)
const URLPAYPAL = "https://api-m.sandbox.paypal.com";
const IDCLIENTE = "tu_client_id_sandbox";
const SECRET = "tu_secret_sandbox";

// Para producción
const URLPAYPAL = "https://api-m.paypal.com";
const IDCLIENTE = "tu_client_id_live";
const SECRET = "tu_secret_live";
```

### Configuración de Email
```php
// Config/Config.php
const EMAIL_REMITENTE = "tu_email@gmail.com";
const NOMBRE_REMITENTE = "Facherito Shop";
```

## 🔐 Seguridad

### Medidas Implementadas
- **Hash SHA-256** para contraseñas
- **Sistema de tokens** para recuperación de passwords
- **Sanitización de datos** contra XSS e inyección SQL
- **Encriptación AES-128-ECB** para datos sensibles
- **Sistema de roles y permisos** granular
- **Validación de entrada** en todos los formularios
- **Protección CSRF** en formularios críticos

## 🌐 API Endpoints

### Autenticación
```
POST /login/loginUser          # Iniciar sesión
POST /login/resetPass          # Recuperar contraseña
POST /login/setPassword        # Cambiar contraseña
```

### Productos
```
GET    /productos/getProductos    # Listar productos
POST   /productos/setProducto     # Crear/actualizar
GET    /productos/getProducto/id  # Obtener producto
DELETE /productos/delProducto     # Eliminar producto
```

### Carrito
```
POST /tienda/addCarrito        # Agregar al carrito
POST /tienda/delCarrito        # Eliminar del carrito
POST /tienda/updCarrito        # Actualizar cantidad
POST /tienda/procesarVenta     # Procesar compra
```

## 📁 Estructura del Proyecto

```
tienda_virtual/
├── Assets/                    # Recursos estáticos
│   ├── css/                  # Estilos CSS
│   ├── js/                   # JavaScript
│   └── images/               # Imágenes
├── Config/                   # Configuración
│   └── Config.php
├── Controllers/              # Controladores MVC
├── Models/                   # Modelos de datos
├── Views/                    # Vistas y templates
├── Helpers/                  # Funciones auxiliares
├── Libraries/                # Librerías core
├── .htaccess                # Configuración Apache
├── index.php                # Punto de entrada
└── db_tiendavirtual.sql     # Schema de base de datos
```

## 🚀 Funcionalidades Destacadas

### 📈 Dashboard Analytics
- Gráficos de ventas por mes/año
- Métricas de productos más vendidos
- Análisis de tipos de pago
- Últimos pedidos y clientes

### 🛒 Experiencia de Compra
- Navegación intuitiva por categorías
- Vista detallada de productos con múltiples imágenes
- Carrito persistente en sesión
- Checkout con múltiples métodos de pago
- Confirmación de pedido por email

### 📱 Responsive Design
- Optimizado para móviles y tablets
- Menú hamburguesa en dispositivos móviles
- Imágenes adaptativas
- Formularios móvil-friendly

## 🔄 Flujo de Trabajo

### Para Desarrolladores
1. Fork el repositorio
2. Crear rama feature: `git checkout -b feature/nueva-funcionalidad`
3. Commit cambios: `git commit -am 'Agregar nueva funcionalidad'`
4. Push a la rama: `git push origin feature/nueva-funcionalidad`
5. Crear Pull Request

### Para Administradores
1. Acceder al panel: `/dashboard`
2. Gestionar productos y categorías
3. Revisar pedidos y transacciones
4. Generar reportes de ventas
5. Administrar usuarios y permisos

## 📞 Soporte

### Contacto
- **Email:** facheritoShop@gmail.com
- **Teléfono:** +(51)954316648
- **Dirección:** Avenida San José 1233, Chiclayo

### Documentación
- **Wiki del proyecto:** [Enlace a wiki]
- **API Documentation:** [Enlace a docs]
- **Video tutoriales:** [Enlace a videos]

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## 🙏 Contribuciones

Las contribuciones son bienvenidas. Por favor:
1. Fork el proyecto
2. Crear una rama para tu feature
3. Commit tus cambios
4. Push a la rama
5. Abrir un Pull Request

## 🏆 Créditos

**Desarrollado por:** Junior Alvines  
**Diseño inspirado en:** Polo Ralph Lauren aesthetic  
**Framework base:** MVC personalizado  
**Template base:** Coza Store

---

⭐ **¡Si te gusta el proyecto, dale una estrella!** ⭐
