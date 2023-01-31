<?php
use Konekt\PdfInvoice\InvoicePrinter;

include './vendor/autoload.php';
$invoice = new InvoicePrinter();
  /* Header Settings */
  $invoice->setLogo('images/example2.png');
  $invoice->setColor('#007fff');
  $invoice->setType('Sale Invoice');
  $invoice->setReference('INV-55033645');
  $invoice->setDate(date('M dS ,Y', time()));
  $invoice->setTime(date('h:i:s A', time()));
  $invoice->setDue(date('M dS ,Y', strtotime('+3 months')));
  $invoice->setFrom(['Seller Name', 'Sample Company Name', '128 AA Juanita Ave', 'Glendora , CA 91740', 'United States of America']);
  $invoice->setTo(['Purchaser Name', 'Sample Company Name', '128 AA Juanita Ave', 'Glendora , CA 91740', 'United States of America']);
  /* Adding Items in table */
  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480,'M1');
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580,'M1');
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300,'M1');
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100,'M1');

  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480,'M1');
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580,'M1');
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300,'M1');
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100,'M1');
  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480,'M1');
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580,'M1');
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300,'M1');
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100,'M1');

  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480,'M1');
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580,'M1');
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300,'M1');
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100,'M1');

  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480,'M1');
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580,'M1');
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300,'M1');
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100,'M1');

  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480,'M1');
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580,'M1');
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300,'M1');
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100,'M1');

  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480,'M1');
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580,'M1');
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300,'M1');
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100,'M1');

  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480,'M1');
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580,'M1');
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300,'M1');
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100,'M1');


  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480,'M1');
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580,'M1');
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300,'M1');
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100,'M1');


  $invoice->addItem('AMD Athlon X2DC-7450', '2.4GHz/1GB/160GB/SMP-DVD/VB', 6, 0, 580, 0, 3480,'M1');
  $invoice->addItem('PDC-E5300', '2.6GHz/1GB/320GB/SMP-DVD/FDD/VB', 4, 0, 645, 0, 2580,'M1');
  $invoice->addItem('LG 18.5" WLCD', '', 10, 0, 230, 0, 2300,'M1');
  $invoice->addItem('HP LaserJet 5200', '', 1, 0, 1100, 0, 1100,'M1');
  /* Set totals alignment */
  $invoice->setTotalsAlignment('horizontal');
  /* Add totals */
  $invoice->addTotal('Total', 9460);
  $invoice->addTotal('VAT 21%', 1986.6);
  $invoice->addTotal('Shipping costs', 5400);
  $invoice->addTotal('Total due', 16846.6, true);
  /* Set badge */
  $invoice->addBadge('Payment Paid');
  /* Add title */
  $invoice->addTitle('Important Notice');
  /* Add Paragraph */
  $invoice->addParagraph("No item will be replaced or refunded if you don't have the invoice with you. You can refund within 2 days of purchase.");
  /* Set footer note */
  $invoice->setFooternote('Os bens/serviços foram colocados a disposicao do adiquirente na data e local do documento. 
  yIeC - Processado por programa validado Nº 0000/AGT/2021 MalipoPOS
  Empresa: LuaiTech - Luanda , Angola - 000000000 KIlamba, Angola
  Telefone: 923445566 - luaitech.com - gomcalsam@gmail.com
  Capital Social de 40.000 AOA - NIF 1: 5000493341
  A data de emissão: 20-10-2022 || - LuaiTech: Malipo || Página: 1/1
  ');

  $invoice->setIsFinished(true);
  //$invoice->setFooterSaftCod('yIeC - Processado por programa validado Nº 0000/AGT/2021 MalipoPOS');
  //  $invoice->setFooternote('Os bens/serviços foram colocados a disposição do adiquirente na data e local do documento.');

  /* Render */
  $invoice->render('example1.pdf', 'I'); /* I => Display on browser, D => Force Download, F => local path save, S => return document path */
  ?>