# 🔄 Diagrama de Secuencia - Nexora ERP

## 📌 Caso: Crear una venta

Este diagrama muestra la interacción entre cliente, servidor y base de datos.

## 📊 Diagrama de secuencia

```mermaid 
sequenceDiagram

participant Cliente
participant ServidorSOAP
participant BaseDeDatos

Cliente->>ServidorSOAP: crearVenta(datos)
ServidorSOAP->>BaseDeDatos: INSERT venta
ServidorSOAP->>BaseDeDatos: UPDATE stock
BaseDeDatos-->>ServidorSOAP: OK
ServidorSOAP-->>Cliente: Respuesta XML (éxito)