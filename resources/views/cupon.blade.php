<?php
$client_data = session('client-data');
$datos_cupon = session('datos_cupon');
$datos_tour_cupon = session('datos_tour_cupon');
?>

    <div style="width: 100%; border:solid 1px #000; height: 97%; padding-left: 10px; padding-right: 10px;">

            <div style="text-align: right;">
                <img style="float: left;  margin-top: 20px;" src="{{ url('/img/logo.png') }}" alt="logo">
                <p style="float: right; margin-top: 20px;">
                    <b style="font-size: 18px;">Cupón</b>
                    <br>
                    <span style="font-size: 18px; color: red; font-weight: bold">{{$datos_cupon['num_cupon']}}-{{$datos_cupon['numGeneradoCupon']}}</span>
                    <br>
                    <span>2018-01-06 12:30</span>
                </p>
            </div>
            <div style="clear: both;"></div>
            <div style=" width: 100%; ">
                <p style="color: #06749f;"><span style="font-weight: bold; color: #000;">Nombre: </span>{{$client_data['name']}} {{$client_data['last_name']}}</p>
            </div>
            <div style="border: solid 1px;">
                <table style="width: 100%; font-size: 14px;">
                    <thead>
                        <tr>
                            <th>Servicios reservados</th>
                            <th>Fecha</th>
                            <th>Ad</th>
                            <th>Niñ</th>
                            <th>Lugar y hora de cita</th>
                            <th>Hotel</th>
                        </tr>
                    </thead>
                    <tbody style="color: #06749f;">
                        <tr>
                            <td>{{$datos_tour_cupon['name']}}</td>
                            <td>{{$datos_tour_cupon['date']}}</td>
                            <td>{{$datos_tour_cupon['num_adult']}}</td>
                            <td>{{$datos_tour_cupon['num_child']}}</td>
                            <td>Lobby 7:45</td>
                            <td>{{$client_data['hotel']}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="margin-bottom: 0px;">Información adicional</p>
            <div style="border: solid 1px; font-size: 12px; text-align: justify; padding: 5px;">
                <p style="margin: 0;">
                        Espere en el lugar de cita 5 minutos antes de la hora indicada. Por favor esté ATENTO y evite alejarse del lugar de cita. Podrá identificar la
                        transportación fácilmente por el logotipo de Xcaret, Xel Ha, Xplor, Xenotes, Xenses, Xichen o Experiencias Xcaret, acérquese para abordar. Le
                        recordamos que su tour es compartido, pero generalmente el operador es muy puntual. Tour operado por Experiencias Xcaret. INCLUYE:
                        *Transportación redonda desde y hacia el lugar de cita * Guia certificado español-ingles * Acceso Plus Xcaret con más de 30 actividades, shows
                        y exhibiciones incluidas en su entrada * Uso equipo de snorkel y uso de locker (se requiere depósito) * Acceso a un restaurante para comida
                        buffete (podrá elegir el que guste) * Bebidas ilimitadas durante la comida (no alcohólicas) * Una cerveza de cortesía por persona durante la
                        comida * Show de Noche México Espectacular * RECOMENDACIONES: Ropa fresca y cómoda. Un conjunto de ropa seca * Toalla y traje de
                        baño * Zapatos cómodos para caminar o aquashoes o sandalias * Sombrero, gorra y/o lentes para protegerse del sol * Bloqueador solar
                        BIODEGRADABLE * Dinero extra para propinas, recuerdos, y cualquier otro servicio adicional o no incluido.
                </p>
            </div>
            <div style="border: solid 1px; font-size: 11px; text-align: justify; margin-top: 10px; padding: 5px;">
                <p style="margin: 0;">
                        SERVICIO REPROGRAMADO POR CAUSAS DE FUERZA MAYOR. ESTE CUPON NO ES CANCELABLE NI PROGRAMABLE PARA FECHAS
                        POSTERIORES A LAS INDICADAS. SI DESEA REALIZAR UN CAMBIO PARA FECHA ANTERIOR SOLICITARLO CON PREVIA ANTICIPACIÓN.
                </p>
            </div>
            <div style="margin-top: 10px; font-size: 15px; text-align: center;">
                <b>***En caso de no presentarse en el horario y lugar indicado aplicará no show sin derecho a reembolso***</b>
            </div>
            <p style="margin-bottom: 0px; margin-top: 5px; color: #06749f;">Información adicional</p>
            <div style="border: solid 1px; font-size: 12px; text-align: justify; padding: 5px;">
                    <p style="margin: 0;">
                            Para información adicional, cambios y otras gestiones, asi como atencion antes, durante y despues del servicio, contáctanos por los siguientes
        medios:<br>
        Desde Cancún y Puerto Morelos marca <b> 044 998 246 13 49</b> desde numero fijo.<br>
        Desde tu movil de otro pais agreganos como <b>+52 998 246 13 49 </b> llamada o whatsapp.<br>
        Via Email: clientes@turistascancun.com / ventas@turistascancun.com.<br>
        <b>Horario de atencion a clientes</b>: Lunes a Sábado 7AM a 7PM / Domingo solo emergencias al numero movil.<br>
        <b>IMPORTANTE</b><br>
        Por favor considere que en Cancún, Playa del carmen y Riviera Maya, contamos con un horario diferente al resto del Pais por lo que a su
        llegada es de suma importancia sincronizar su horario con la hora local (<b>GMT-5</b>) para evitar contratiempos.
                    </p>
            </div>
            <p style="margin-bottom: 0px; margin-top: 5px; color: #06749f;">Cancelación y cambios de fecha</p>
            <div style="border: solid 1px; font-size: 12px; text-align: justify; padding: 5px;">
                    <p style="margin: 0;">
                            Toda cancelación, cambio de fecha y demas gestiones, deberán ser solicitadas via correo electronico por el titular de la reserva. NO se acepta
                            ninguna gestión por medio de terceras personas. Cancelaciones con 48 horas o más de anticipación, reembolso de 80%. Cancelaciones con
                            menos de 48 horas no aplica reembolso. Pagos de garantía no son reembolsables. Servicios en paquete no son cancelables una vez iniciado los
                            servicios. Cambios de fecha o cancelaciones por enfermedad son posibles como límite 7 PM del día anterior al tour presentando receta médica
                            del titular o acompañante; si reservó en paquete se reembolsará la diferencia del total pagado considerando los precios normales de los
                            servicios realizados hasta el momento. Cambios de fecha por mal clima son posibles como límite 7PM del día anterior al tour. No es posible
                            realizar cancelación por enfermedad o cambios de fecha por mal clima el mismo día de la visita. Es posible cambio de fecha por enfermedad o
                            mal clima hasta un año posterior a la fecha original, siempre y cuando lo solicite bajo las condiciones antes mencionadas. Es responsabilidad
                            del cliente validar la información registrada en este cupón. No nos hacemos responsables de la perdida de servicios originados por datos
                            errónes proporcionados por el cliente al momento de solicitar la reserva.
                    </p>
            </div>
            <div style="border: solid 1px; font-size: 12px; text-align: justify; padding: 5px; margin-top: 5px;">
                    <p style="margin: 0;">
                            La agencia y sus representantes actuan únicamente como agentes intermediarios de compañias de transportación, parques, restaurantes y
                            otros prestadores de servicios y no tiene responsabilidad alguna en caso de pérdidas, daños, accidentes, cambios de horario, demoras u otras
                            irregularidades originadas por causas ajenas a la agencia. En cuyo caso el único responsable será el prestador final del servicio. En caso de
                            algún inconveniente, por favor reportelo con nosotros de inmediato o más tardar dentro de los 5 días posteriores de haber recibido el servicio
                            para la aclaración pertinente.
                    </p>
            </div>
        </div>
