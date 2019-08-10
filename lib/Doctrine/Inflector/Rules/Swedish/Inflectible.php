<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules\Swedish;

use Doctrine\Inflector\Rules\Pattern;
use Doctrine\Inflector\Rules\Substitution;
use Doctrine\Inflector\Rules\Transformation;
use Doctrine\Inflector\Rules\Word;

class Inflectible
{
	/**
	 * @return Transformation[]
	 */
	public static function getSingular(): iterable
	{
		// er
		yield new Transformation(new Pattern('/([tmnslpr])er$/i'), '\1');

		// or
		yield new Transformation(new Pattern('/or$/i'), 'a');

		// ar

		yield new Transformation(new Pattern('/mar$/i'), 'me');
		yield new Transformation(new Pattern('/kar$/i'), 'ke');
		yield new Transformation(new Pattern('/gar$/i'), 'g');
		yield new Transformation(new Pattern('/lar$/i'), 'l');
		yield new Transformation(new Pattern('/glar$/i'), 'gel');

		// er
		yield new Transformation(new Pattern('/ler$/i'), 'el');

		// r
		yield new Transformation(new Pattern('/der$/i'), 'de');
		yield new Transformation(new Pattern('/ader$/i'), 'ad');

		// n
		yield new Transformation(new Pattern('/en$/i'), 'e');

		yield new Transformation(new Pattern('/tlar$/i'), 'tel');
		yield new Transformation(new Pattern('/ön$/i'), 'ö');
		yield new Transformation(new Pattern('/öcker$/i'), 'ok');
		yield new Transformation(new Pattern('/a$/i'), 'um');
		yield new Transformation(new Pattern('/män$/i'), 'man');
		yield new Transformation(new Pattern('/möss$/i'), 'mus');
		yield new Transformation(new Pattern('/skor$/i'), 'sko');
		yield new Transformation(new Pattern('/änder$/i'), 'and');
		yield new Transformation(new Pattern('/den$/i'), 'd');
		yield new Transformation(new Pattern('/sor$/i'), 's');
		yield new Transformation(new Pattern('/rier$/i'), 'ri');
		yield new Transformation(new Pattern('/min$/i'), 'mi');
		yield new Transformation(new Pattern('/var/i'), 'v');

	}

	/**
	 * @return Transformation[]
	 */
	public static function getPlural(): iterable
	{
		// -er
		yield new Transformation(new Pattern('/([tmnslpr])$/i'), '\1er');

		// -or
		yield new Transformation(new Pattern('/a$/i'), 'or');

		// -ar
		yield new Transformation(new Pattern('/e$/i'), 'ar');
		yield new Transformation(new Pattern('/g$/i'), 'gar');
		yield new Transformation(new Pattern('/l$/i'), 'lar');
		yield new Transformation(new Pattern('/el$/i'), 'lar');

		// -er
		yield new Transformation(new Pattern('/kell$/i'), 'kler');
		yield new Transformation(new Pattern('/tel$/i'), 'tlar');

		yield new Transformation(new Pattern('/de$/i'), 'der');

		yield new Transformation(new Pattern('/le$/i'), 'len');
		yield new Transformation(new Pattern('/ö$/i'), 'ön');
		yield new Transformation(new Pattern('/ok$/i'), 'öcker');
		yield new Transformation(new Pattern('/um$/i'), 'a');
		yield new Transformation(new Pattern('/o$/i'), 'or');
		yield new Transformation(new Pattern('/s$/i'), 'sor');
		yield new Transformation(new Pattern('/man$/i'), 'män');
		yield new Transformation(new Pattern('/mus$/i'), 'möss');
		yield new Transformation(new Pattern('/d$/i'), 'den');
		yield new Transformation(new Pattern('/ad$/i'), 'ader');
		yield new Transformation(new Pattern('/ne$/i'), 'nen');
		yield new Transformation(new Pattern('/and$/i'), 'änder');
		yield new Transformation(new Pattern('/i$/i'), 'ier');
		yield new Transformation(new Pattern('/mi$/i'), 'min');
//		inflect.plural(/de$/i, 'der') # fiende, fiender

	}

	/**
	 * @return Substitution[]
	 */
	public
	static function getIrregular()
	{
//		yield new Substitution(new Word('axs'), new Word('axs'));
	}
}
