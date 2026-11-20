<!DOCTYPE html>
<html lang="es">
<body style="font-family: Arial, sans-serif; color: #0E3B2C;">
  <h2 style="margin: 0 0 16px;">Nueva solicitud de maqueta</h2>

  <table cellpadding="8" style="border-collapse: collapse;">
    <tr><td><b>Nombre</b></td><td>{{ $datos['nombre'] }}</td></tr>
    <tr><td><b>Negocio</b></td><td>{{ $datos['negocio'] }}</td></tr>
    <tr><td><b>Teléfono</b></td><td>{{ $datos['telefono'] }}</td></tr>
    <tr><td><b>Correo</b></td><td>{{ $datos['email'] ?? '—' }}</td></tr>
    <tr><td><b>Sector</b></td><td>{{ $datos['sector'] }}</td></tr>
    <tr><td><b>Plan</b></td><td>{{ $datos['plan'] }}</td></tr>
    <tr><td><b>Web actual</b></td><td>{{ $datos['web_actual'] ?? '—' }}</td></tr>
    <tr>
      <td style="vertical-align: top;"><b>Mensaje</b></td>
      <td>{!! nl2br(e($datos['mensaje'] ?? '—')) !!}</td>
    </tr>
  </table>
</body>
</html>
