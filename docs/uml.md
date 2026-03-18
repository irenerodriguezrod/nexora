# 📐 Diagrama de Clases UML - Nexora ERP

## 📌 Descripción

Este diagrama representa las entidades principales del sistema y sus relaciones.

## 📊 Diagrama UML

```mermaid
classDiagram

class Usuario {
    +int id
    +string username
    +string password
    +string rol
}

class Empleado {
    +int id
    +string nombre
    +string cargo
    +string estado
}

class Cliente {
    +int id
    +string nombre
    +string email
    +string telefono
}

class Producto {
    +int id
    +string nombre
    +float precio
    +int stock
}

class Venta {
    +int id
    +date fecha
    +float total
}

class DetalleVenta {
    +int id
    +int cantidad
    +float subtotal
}

Usuario --> Empleado
Empleado --> Venta
Cliente --> Venta
Venta --> DetalleVenta
Producto --> DetalleVenta