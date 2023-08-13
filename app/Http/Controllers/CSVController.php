<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use League\Csv\Reader;

class CSVController extends Controller
{
    public function readCSV(Request $request)
    {
        // Verifique se um arquivo CSV foi enviado via formulário
        if ($request->hasFile('csv_file')) {
            // Obtenha o arquivo enviado
            $file = $request->file('csv_file');

            // Crie um leitor para o arquivo CSV
            $csv = Reader::createFromPath($file->getPathname(), 'r');

            // Defina o delimitador, se necessário (o padrão é a vírgula)
            // $csv->setDelimiter(';');

            // Obtenha os registros como um array
            $records = $csv->getRecords();

            // Crie um array para armazenar os dados do CSV
            $data = [];

            // Faça algo com os dados do CSV
            foreach ($records as $record) {
                // Adicione cada linha do CSV ao array de dados
                $data[] = $record;
            }

            // Retorne a visualização e passe os dados do CSV como uma variável chamada 'csvData'
            return view('csv', ['csvData' => $data]);
        } else {
            // Se nenhum arquivo foi enviado, retorne uma resposta de erro
            return response()->json(['error' => 'Nenhum arquivo CSV enviado.'], 400);
        }
    }
}
