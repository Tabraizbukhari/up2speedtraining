<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examsother extends Model
{
	protected $fillable = [

            'patient_id'
      
            'zposneg',
            'zlr',
            'zdescdx',

            'oposneg',
            'olr',
            'odescdx',

            'tposneg',
            'tlr',
            'tdescdx',

            'thposneg',
            'thlr',
            'thdescdx',

            'frposneg',
            'frlr',
            'frdescdx',

            'fiposneg',
            'filr',
            'fidescdx',

            'sxposneg',
            'sxlr',
            'sxdescdx',

            'svposneg',
            'svlr',
            'svdescdx',

            'etposneg',
            'etlr',
            'etdescdx',

            'ninposneg',
            'ninlr',
            'nindescdx',

            'tnposneg',
            'tnvlr',
            'tndescdx',

            'elposneg',
            'elvlr',
            'eldescdx',

            'twposneg',
            'twvlr',
            'twdescdx',

            'thnposneg',
            'thnvlr',
            'thndescdx',

            'frtnposneg',
            'frtnvlr',
            'frtndescdx',

            'fitnposneg',
            'fitnvlr',
            'fitndescdx',

            'sxtnposneg',
            'sxtnvlr',
            'sxtndescdx',

            'svtnposneg',
            'svtnvlr',
            'svtndescdx',

            'eigtnposneg',
            'eigtnvlr',
            'eigtndescdx',

            'nintnposneg',
            'nintnvlr',
            'nintndescdx',

            'twtposneg',
            'twtvlr',
            'twtdescdx',

            'twtoposneg',
            'twtovlr',
            'twtodescdx',
            'twtoplus',

            'twttposneg',
            'twttvlr',
            'twttdescdx',
            'twttplus',

            'twthadditional',

            'twtfrposneg',
            'twtfrvlr',
            'twtfrdescdx',


            'twtfvposneg',
            'twtfvvlr',
            'twtfvdescdx',
            'twtfvplus',

            'twtsxposneg',
            'twtsxvlr',
            'twtsxdescdx',

            'twtsvposneg',
            'twtsvvlr',
            'twtsvdescdx',

            'twtetposneg',
            'twtetvlr',
            'twtetdescdx',

            'twt9posneg',
            'twt9lr',
            'twt9descdx',
            'twt9plus',

            'th30posneg',
            'th30lr',
            'th30descdx',

            'th31additional',

            'th32posneg',
            'th32lr',

            't33posneg',
            't33lr',
            't33descdx',

            't34posneg',
            't34lr',

            't3posneg',
            't3lr',
            't3additional',

            'f4additional',

            'f46posneg',
            'f46lr',

            'f47posneg',
            'f47lr',

            'f48posneg',
            'f48lr',
            'f48descdx',

            'f49posneg',
            'f49lr',
            'f49descdx',

            'f0posneg',
            'f0lr',
            'f0descdx',

            'f1posneg',
            'f1lr',
            'f1descdx',

            'f2posneg',
            'f2lr',
            'f2descdx',

            'f3posneg',
            'f3lr',
            'f3descdx',

            'f4posneg',
            'f4lr',
            'f4descdx',

            'fposneg',
            'fdescdx',

            'f6posneg',
            'f6descdx',

            'f7posneg',
            'f7lr',
            'f7descdx',
            
            'f8posneg',
            'f8lr',
            'f8descdx',

            'f9additional',

            's60posneg',
            's60lr',
            's60descdx',

            's61posneg',
            's61lr',
            's61descdx',


            's62posneg',
            's62descdx',

            's63posneg',
            's63lr',
            's63descdx',

            's64posneg',
            's64lr',
            's64descdx',

            's6additional',

            's66posneg',
            's66lr',
            's66descdx',
            's66plus',

            's67posneg',
            's67lr',
            's67descdx',
            's67plus',

            's68posneg',
            's68lr',
            's68descdx',

            's69posneg',
            's69lr',
            's69descdx',
            's69plus',

            's70posneg',
            's70lr',
            's70descdx',

            's71posneg',
            's71lr',
            's71descdx',
            's71plus',
            
            's72posneg',
            's72lr',
            's72descdx',

            's73dditional',

            's74posneg',
            's74lr',
            's74descdx',

            's7posneg',
            's7lr',
            's7descdx',

            's76posneg',
            's76lr',
            's76descdx',

            's77posneg',
            's77lr',
            's77descdx',

            's78posneg',
            's78lr',
            's78descdx',

            's79posneg',
            's79lr',
            's79descdx',

            's80posneg',
            's80lr',
            's80descdx',

            's81posneg',
            's81lr',
            's81descdx',

            's82posneg',
            's82lr',
            's82descdx',

            's83posneg',
            's83lr',
            's83descdx',

            's84additional',

            's8posneg',
            's8lr',
            's8descdx',

            's86posneg',
            's86lr',
            's86descdx',

            's87posneg',
            's87lr',
            's87descdx',

            's88posneg',
            's88lr',
            's88descdx',

            's90posneg',
            's90lr',
            's90descdx',

            's91additional',

            's92posneg',
            's92lr',
            's92descdx',

            's93posneg',
            's93lr',
            's93descdx',

            's94posneg',
            's94descdx',

            's9additional',

            's96posneg',
            's96lr',
            's96descdx',


            's97posneg',
            's97lr',
            's97descdx',

            's98posneg',
            's98lr',
            's98descdx',

            's99posneg',
            's99lr',
            's99descdx',

            's100posneg',
            's100lr',
            's100descdx',

            's101posneg',
            's101lr',
            's101descdx',

            's102posneg',
            's102lr',
            's102descdx',

            's103posneg',
            's103lr',
            's103descdx',

            's104posneg',
            's104lr',
            's104descdx',

            's10posneg',
            's10lr',
            's10descdx',

            's1066additional',
            
            's107posneg',
            's107lr',
            's107descdx',

            's108posneg',
            's108lr',
            's108descdx',

            's109posneg',
            's109lr',
            's109descdx',

            's110posneg',
            's110lr',
            's110descdx',

            's111posneg',
            's111lr',
            's111descdx',

            's112posneg',
            's112lr',
            's112descdx',

            's113posneg',
            's113lr',
            's113descdx',

            's114posneg',
            's114lr',
            's114descdx',

            's11posneg',
            's11lr',
            's11descdx',

            's116posneg',
            's116lr',
            's116descdx',

            's117posneg',
            's117lr',
            's117descdx',

            's117additional',

            's118posneg',
            's118lr',
            's118descdx',

            's119posneg',
            's119lr',
            's119descdx',

            's220posneg',
            's2208lr',
            's220descdx',

            's221posneg',
            's221lr',
            's2218descdx',
            
 
	];
}
