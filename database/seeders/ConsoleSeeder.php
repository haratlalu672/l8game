<?php

namespace Database\Seeders;

use App\Models\Console;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consoles = collect([
            '3DO',
            'Action Max',
            'Amiga CD32',
            'Amstrad GX4000',
            'ApeXtreme',
            'APF Imagination Machine',
            'Apple Pippin',
            'Atari 2600 Jr.',
            'Atari 2600 / Atari Video Computer System (VCS) / Sears Video Arcade',
            'Atari 2800 / Sears Video Arcade II (Japan Only)',
            'Atari  5100/Atari 5200 Jr.',
            'Atari  5200 (US Only)',
            'Atari 7800',
            'Atari Flashback',
            'Atari Flashback 2',
            'Atari Flashback 3',
            'Atari Flashback 4',
            'Atari Jaguar',
            'Atari Jaguar CD',
            'Atari Jaguar II',
            'Atari Panther',
            'Atari XEGS',
            'Bally Astrocade',
            'Bandai Super Vision 8000',
            'C1 NES TV / Sharp Nintendo Television',
            'Casio Loopy',
            'Channel F System II',
            'Coleco Gemini (Atari 2600 hardware clone)',
            'ColecoVision',
            'Commodore 64GS',
            'CreatiVision',
            'Dreamcast',
            'Emerson Arcadia 2001 (Leisure Vision in Canada)',
            'Entex Adventure Vision',
            'Epoch Cassette Vision',
            'EVO Smart Console',
            'Fairchild Channel F / Video Entertainment System (VES)',
            'Famicom Disk System (Japan only)',
            'Game Wave',
            'GamePop',
            'GameStick [6]',
            'Intellivision',
            'Intellivision  II',
            'Interton VC 4000',
            'iQue Player',
            'L600',
            'Magnavox Odyssey²',
            'Mattel HyperScan',
            'NES-101 / AV Famicom',
            'Net Yaroze',
            'Nintendo 64',
            'Nintendo 64DD',
            'Nintendo Entertainment System (NES) / Famicom',
            'Nintendo GameCube',
            'Nintendo Gameboy  Player',
            'Nuon',
            'OnLive',
            'Ouya',
            'Panasonic  M2',
            'Panasonic  Q/Q Game Boy Player',
            'PC -FX',
            'Phantom',
            'PlayCable',
            'Playdia',
            'PlayStation',
            'PlayStation 2',
            'PlayStation 2 Slimline',
            'PlayStation 3',
            'PlayStation 3 Slim',
            'PlayStation 3 Super Slim',
            'PlayStation 4',
            'PSone',
            'PSX  (DVR)',
            'PV-1000',
            'RCA Studio II',
            'RDI Halcyon',
            'Retro Duo',
            'Sega Firecore',
            'Sega Master System II',
            'Sega Master System III',
            'Sega Master System, Sega Mark III',
            'Sega Neptune',
            'Sega Saturn',
            'Sega SG-1000',
            'Sega SG-1000 II',
            'Sega Zone',
            'Steam Box',
            'Super Cassette Vision',
            'V.Smile',
            'Vectrex',
            'Virtual Boy',
            'Wii',
            'Wii U',
            'XaviXPort gaming console',
            'Xbox',
            'Xbox 360 S',
            'Xbox 360 (original white)',
            'Xbox One',
            'Zeebo',
            'Zemmix',
            'Zone',
        ]);

        $consoles->each(function ($console) {
            Console::create([
                'name' => $console,
                'slug' => Str::slug($console)
            ]);
        });
    }
}
