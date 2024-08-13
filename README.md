
# Empresa de Limpieza - Sitio Web

Este repositorio contiene el código fuente del sitio web de una **Empresa de Limpieza**. El sitio web está diseñado para proporcionar información sobre los servicios ofrecidos, permitir a los usuarios solicitar cotizaciones, y facilitar el contacto directo con la empresa.

## Estructura del Proyecto

- **Frontend:**
  - **HTML:** La mayor parte del contenido estático del sitio web está construido utilizando HTML5.
  - **CSS:** Los estilos personalizados están definidos en archivos CSS.
  - **Bootstrap:** Se ha utilizado Bootstrap para un diseño responsivo y componentes UI predefinidos.
  - **JavaScript:** Se emplea JavaScript para la interacción dinámica del usuario y algunas validaciones en el frontend.

- **Backend:**
  - **PHP:** El servidor se ejecuta en PHP, manejando la lógica de negocio y las interacciones con el usuario.
  - **Composer:** Utilizado para la gestión de dependencias en PHP.
  - **PHPMailer:** Se utiliza para gestionar el envío de correos electrónicos, como las notificaciones de contacto o solicitudes de cotización.

## Instalación

Sigue los pasos a continuación para clonar y ejecutar este proyecto en tu entorno local.

1. **Clonar el repositorio:**
   ```bash
   HTTPS: git clone https://github.com/SoteloJoaquin/empresa-limpieza.git
   SSH: git clone git@github.com:SoteloJoaquin/empresa-limpieza.git
   ```

2. **Instalar dependencias de PHP:**
   Asegúrate de tener instalado Composer en tu máquina. Luego, ejecuta:
   ```bash
   composer install
   ```

3. **Configuración del servidor:**
   - Asegúrate de tener un servidor Apache o Nginx configurado para apuntar a la carpeta raíz del proyecto.
   - Configura tu archivo `.env` con las credenciales necesarias para PHPMailer, por ejemplo:
     ```plaintext
     SMTP_HOST=smtp.tuemail.com
     SMTP_PORT=587
     SMTP_USER=tuusuario@tuemail.com
     SMTP_PASS=tucontraseña
     ```

4. **Ejecución del sitio web:**
   - Inicia el servidor web (Apache/Nginx).
   - Accede al sitio web desde tu navegador en `http://localhost`.

## Funcionalidades Principales

- **Página Principal:** Introducción a los servicios de la empresa de limpieza, testimonios de clientes y una galería de trabajos anteriores.
- **Formulario de Contacto:** Permite a los usuarios ponerse en contacto con la empresa. Los correos electrónicos se envían utilizando PHPMailer.
- **Solicitud de Cotización:** Un formulario dinámico donde los usuarios pueden solicitar una cotización para los servicios específicos que requieren.
- **Información del Servicio:** Descripciones detalladas de cada servicio ofrecido, con la posibilidad de solicitar más información.

## Tecnologías Utilizadas

- **HTML5** - Estructura del sitio.
- **CSS3** - Estilos personalizados.
- **Bootstrap 5** - Framework de CSS para un diseño responsivo.
- **JavaScript** - Funcionalidades interactivas en el frontend.
- **PHP 7+** - Lógica del backend.
- **Composer** - Gestión de dependencias en PHP.
- **PHPMailer** - Envío de correos electrónicos.

## Contribuciones

Si deseas contribuir a este proyecto, puedes seguir estos pasos:

1. **Fork** el repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-funcionalidad`).
3. Realiza tus cambios y haz un **commit** (`git commit -m 'Añadida nueva funcionalidad'`).
4. Sube tus cambios (`git push origin feature/nueva-funcionalidad`).
5. Abre un **Pull Request**.

## Contacto

Si tienes alguna duda o necesitas soporte, no dudes en ponerte en contacto con nosotros a través de [correo@empresa.com](mailto:correo@empresa.com).

---

Este README proporciona una visión general del proyecto, así como instrucciones sobre cómo instalarlo y configurarlo, junto con detalles sobre las tecnologías utilizadas y cómo contribuir.
