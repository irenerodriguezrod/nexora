# 🏗️ Arquitectura del Sistema - Nexora ERP

## 📌 Descripción General

Nexora ERP implementa una arquitectura en tres capas basada en el principio de separación de responsabilidades.

## 🧱 Capas del sistema

### 1. Capa de Presentación
- Cliente PHP
- Interfaz de usuario
- Consumo de servicios SOAP

### 2. Capa de Servicios
- Servidor SOAP implementado con NuSOAP
- Lógica de negocio
- Validación de datos

### 3. Capa de Datos
- Base de datos MySQL
- Modelo relacional en 3FN

## 🔄 Flujo de comunicación

Cliente  
→ Petición SOAP (XML)  
→ Servidor  
→ Lógica de negocio  
→ Base de datos  
→ Respuesta XML  
→ Cliente  

## 📊 Diagrama de arquitectura

```mermaid
flowchart LR

ClientePHP -->|SOAP Request| ServidorSOAP
ServidorSOAP --> LogicaNegocio
LogicaNegocio --> BaseDeDatos[(MySQL)]
BaseDeDatos --> LogicaNegocio
LogicaNegocio -->|SOAP Response| ClientePHP