# 🗄️ Modelo Entidad-Relación - Nexora ERP

## 📌 Descripción

Este modelo define las entidades principales del sistema y sus relaciones.

---

## 📊 Diagrama ER

```mermaid
erDiagram

USUARIO ||--|| EMPLEADO : asociado
CLIENTE ||--o{ VENTA : realiza
EMPLEADO ||--o{ VENTA : registra
VENTA ||--|{ DETALLE_VENTA : contiene
PRODUCTO ||--o{ DETALLE_VENTA : incluido_en