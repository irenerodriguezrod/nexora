# Nexora ERP

> Sistema modular de planificación de recursos empresariales (ERP) desarrollado en PHP con arquitectura cliente-servidor basada en servicios web SOAP.

---

## 📌 Descripción

**Nexora ERP** es un sistema de gestión empresarial diseñado para pequeñas y medianas empresas que necesitan centralizar la administración de clientes, productos, ventas y personal en una única plataforma.

El sistema implementa una arquitectura orientada a servicios (SOA) utilizando PHP y la librería NuSOAP para la exposición y consumo de servicios web SOAP.

El diseño modular permite separar claramente:

* Lógica de negocio
* Capa de servicios
* Persistencia de datos

Garantizando escalabilidad, mantenibilidad y claridad estructural.

---

## 🎯 Objetivos del Proyecto

* Diseñar e implementar un ERP modular desde cero.
* Aplicar arquitectura cliente-servidor basada en SOAP.
* Desarrollar servicios web interoperables.
* Diseñar una base de datos relacional normalizada (3FN).
* Aplicar principios de separación de responsabilidades.
* Construir un sistema escalable y preparado para futuras ampliaciones.

---

## 🏗️ Arquitectura del Sistema

Nexora sigue una arquitectura en tres capas claramente diferenciadas:

### 1️⃣ Capa de Presentación (Cliente)

* Aplicación PHP que consume servicios SOAP.
* Interfaz para interacción con el usuario.
* Gestión de formularios y visualización de datos.

### 2️⃣ Capa de Servicios (Servidor SOAP)

* Implementada mediante NuSOAP.
* Exposición de métodos empresariales.
* Validación de datos y control de errores.

### 3️⃣ Capa de Datos

* Base de datos MySQL.
* Modelo relacional normalizado hasta Tercera Forma Normal (3FN).

### 🔄 Flujo de funcionamiento

Cliente
→ Petición SOAP (XML)
→ Servidor NuSOAP
→ Base de datos
→ Respuesta XML
→ Cliente

---

## 🏗️ Detalle Técnico de la Arquitectura

<details>
<summary><strong>Ver explicación técnica detallada</strong></summary>

### 🔹 Enfoque arquitectónico

Nexora implementa una arquitectura en tres capas basada en el principio de separación de responsabilidades:

* Presentación
* Servicios
* Persistencia

Esto permite bajo acoplamiento y alta cohesión entre módulos.

### 🔹 Comunicación

La comunicación cliente-servidor se realiza mediante SOAP, intercambiando mensajes XML estructurados.

Flujo interno:

1. El cliente genera una petición SOAP.
2. El servidor la procesa mediante NuSOAP.
3. Se ejecuta la lógica de negocio.
4. Se interactúa con la base de datos.
5. Se devuelve una respuesta XML estructurada.

### 🔹 Ventajas del diseño

* Modularidad.
* Posibilidad de integración con otros sistemas.
* Mantenibilidad.
* Escalabilidad futura.

</details>

---

## 🛠️ Tecnologías Utilizadas

* PHP 8
* MySQL
* XML
* SOAP
* NuSOAP
* Apache (XAMPP)

---

## 📦 Funcionalidades Implementadas

### 👤 Gestión de Usuarios

* Autenticación de usuarios.
* Control de acceso básico.
* Validación de credenciales en servidor.

### 👥 Gestión de Clientes

* Alta de clientes.
* Modificación de datos.
* Listado completo.
* Historial de operaciones.

### 📦 Gestión de Productos

* Alta de productos.
* Actualización de precios.
* Control y actualización automática de stock.

### 🧾 Gestión de Ventas

* Registro de ventas.
* Asociación cliente-producto.
* Cálculo automático.
* Actualización de inventario tras cada operación.

### 🧑‍💼 Gestión de Personal

* Registro de empleados.
* Asignación de roles o cargos.
* Gestión de datos laborales.
* Control básico de estado (activo/inactivo).
* Asociación de empleados a operaciones del sistema.

Este módulo amplía el alcance del ERP permitiendo gestionar recursos humanos dentro del mismo ecosistema empresarial.

---

## 🗄️ Modelo de Base de Datos

### Tablas principales

* usuarios
* empleados
* clientes
* productos
* ventas
* detalle_venta

### Relaciones principales

* Un cliente puede tener múltiples ventas.
* Una venta puede contener múltiples productos.
* Un empleado puede registrar múltiples ventas.
* El stock se actualiza automáticamente tras cada operación.
* Los usuarios se asocian a empleados mediante control de credenciales.

La base de datos se encuentra normalizada hasta Tercera Forma Normal (3FN).

---

## 📐 Justificación del Diseño

<details>
<summary><strong>Ver decisiones técnicas y criterios de diseño</strong></summary>

### 🔹 Elección de SOAP

Aunque REST es el estándar actual, se ha optado por SOAP para:

* Comprender arquitectura de servicios tradicionales.
* Trabajar con contratos WSDL.
* Profundizar en intercambio XML.
* Simular entornos empresariales legacy.

### 🔹 Modularidad

Cada módulo (clientes, productos, ventas, personal) funciona de manera independiente, permitiendo ampliaciones sin afectar al núcleo del sistema.

### 🔹 Base de datos

El modelo se ha diseñado en 3FN para:

* Evitar redundancias.
* Garantizar integridad referencial.
* Permitir escalabilidad estructural.

### 🔹 Enfoque profesional

El sistema está preparado para evolucionar hacia:

* Autenticación avanzada.
* Integraciones externas.
* Migración a arquitectura REST.

</details>

---

## 🔐 Seguridad

* Validación de parámetros en el servidor.
* Sanitización de entradas.
* Manejo estructurado de errores SOAP.
* Separación entre lógica de negocio y presentación.
* Control de acceso según autenticación.

---

## 📈 Mejoras Futuras

* Implementación de autenticación basada en tokens (JWT).
* Panel de administración con dashboard estadístico.
* Generación automática de facturas en PDF.
* Migración a arquitectura REST.
* Dockerización del sistema.
* Implementación de pruebas automatizadas.
* Control avanzado de roles y permisos.

---

## 🚀 Instalación

1. Clonar el repositorio.
2. Importar la base de datos en MySQL.
3. Configurar credenciales en `config/conexion.php`.
4. Ejecutar el servidor en entorno Apache.
5. Acceder al cliente desde navegador.

---

## 👩🏻‍💻 Autora

**Irene Rodríguez**
Desarrolladora Web en formación – 2º DAW

Proyecto desarrollado como iniciativa personal para portfolio profesional, orientado a demostrar conocimientos en arquitectura cliente-servidor, servicios web SOAP y diseño modular de software empresarial.