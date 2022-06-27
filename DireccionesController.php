<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DireccionesController extends Controller
{
   public function Direccion($Direccion)
   {
       switch($Direccion)
       {
           case 'compras':
            return view('cristianparte.compras');
            break;
            case 'galeria':
                return view('cristianparte.galeria  ');
                break;
                case 'imc':
                    return view('cristianparte.imc  ');
                    break;
                    case 'classes':
                        return view('cristianparte.classes  ');
                        break;
                        case 'brazo':
                            return view('cristianparte.brazo  ');
                            break;
                            case 'pecho':
                                return view('cristianparte.pecho  ');
                                break;
                                case 'hombro':
                                    return view('cristianparte.hombro  ');
                                    break;
                                    case 'abdomen':
                                        return view('cristianparte.abdomen  ');
                                        break;
                                        case 'pierna':
                                            return view('cristianparte.pierna  ');
                                            break;
                                            case 'espalda':
                                                return view('cristianparte.espalda  ');
                                                break;
                                                case 'alimento':
                                                    return view('cristianparte.alimento');
                                                    break;
                                                    case 'herramientas':
                                                        return view('cristianparte.herramientas');
                                                        break;
                                                        case 'imc_u':
                                                            return view('cristianparte.imc_u');
                                                            break;
                                                            case 'classes_u':
                                                                return view('cristianparte.classes_u');
                                                                break;
                                                                case 'brazo_u':
                                                                    return view('cristianparte.brazo_u');
                                                                    break;
                                                                    case 'pecho_u':
                                                                        return view('cristianparte.pecho_u');
                                                                        break;
                                                                        case 'hombro_u':
                                                                            return view('cristianparte.hombro_u');
                                                                            break;
                                                                            case 'pierna_u':
                                                                                return view('cristianparte.pierna_u');
                                                                                break;
                                                                                case 'abdomen_u':
                                                                                    return view('cristianparte.abdomen_u');
                                                                                    break;
                                                                                    case 'espalda_u':
                                                                                        return view('cristianparte.espalda_u');
                                                                                        break;
                                                                                        case 'compras_u':
                                                                                            return view('cristianparte.compras_u');
                                                                                            break;
                                                                                            case 'alimento_u':
                                                                                                return view('cristianparte.alimento_u');
                                                                                                break;
                                                                                                case 'herramientas_u':
                                                                                                    return view('cristianparte.herramientas_u');
                                                                                                    break;
           
       }

   }
}
