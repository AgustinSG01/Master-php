/*
    2. Modificar la comision de los vendedores y ponerla al 0.5% cuando ganan más de 50k
*/

UPDATE vendedores SET comision=0.5 WHERE sueldo >= 50000;