<?php
/**
 * @package Mob_Quotes
 * @version 1.0
 */
/*
Plugin Name: Mob Quotes
Plugin URI: 
Description: Quotes from famous mobsters. 
When activated you will randomly see a quote from a famous mobster on every page in your admin screen.
Based on the Hello Dolly plugin by Matt Mullenweg.
Author: Alan Hylands
Version: 1.0
Author URI: https://alanhylands.com
*/

function mobquotes_get_quote() {
	/** These are the mobster quotes */
	$quotes = "
I respectfully decline to answer because I honestly believe my answer might tend to incriminate me - Joey Gallo
No one will ever kill me, they wouldn’t dare - Carmine Galante
I never lie to any man because I don’t fear anyone. The only time you lie is when you are afraid - John Gotti
You can get much further with a kind word and a gun then you can with a kind word alone - Al Capone
There’s no such thing as good money or bad money.There’s just money. - Lucky Luciano
I can’t stand squealers, hit that guy! - Albert Anastasia
If a man is dumb, someone is going to get the best of him, so why not you? If you don’t, you’re as dumb as he is - Arnold Rothstein
Judges, lawyers and politicians have a license to steal. We don’t need one. - Carlo Gambino
We took care of Kennedy - Sam Giancana
A boy has never wept…nor dashed a thousand kin - Dutch Schultz
It takes many stepping stones, you know, for a man to rise. None can do it unaided - Joe Bonanno
Nothing personal, it’s just business - Otto Berman
Las Vegas turns women into men and men into idiots. - Bugsy Siegel
Murders came with smiles, shooting people was no big deal for us Goodfellas. - Henry Hill
This life of ours, this is a wonderful life. If you can get through life like this and get away with it, hey, that’s great. But its very, very unpredictable. There’s so many ways you can screw it up. - Paul Castellano
A newspaper man wrote an article that I had 300 million dollars, well, I wish I had a million dollars - Meyer Lansky
If there is a will, there is always a way my friend - Richard Kuklinski
I stuck the drill in his chest and his legs, on the side of his head. I ripped his hair out - John Veasey
You know what I’ll do? I’ll get a knife and cut out his tongue, and we’ll send it to his wife - John Stanfa
You weren’t supposed to walk away no more. You fucked me, and that was the worst thing you ever did - Tommy Agro
I have killed no men, that, in the first place, didn’t deserve killing - Mickey Cohen
I like to be myself. Misery loves company - Anthony Corallo
Other kids are brought up nice and sent to Harvard and Yale. Me? I was brought up like a mushroom. - Frank Costello
Run from a knife and rush a gun. - Jimmy Hoffa
There are three sides to every story. Mine, yours and the truth. - Joe Massino
Don’t let your tongue be your worst enemy. - John Franseze
I called your f—— house five times yesterday, now, if you’re going to disregard my m—– f—— phone calls, I’ll blow you and that f —— house up… This is not a f—— game. My time is valuable. If I ever hear anybody else calls you and you respond within five days, I’ll f—— kill you. - John Gotti
Behind every great fortune,there is a crime! - Lucky Luciano
Always overpay your taxes.That way you’ll get a refund. - Meyer Lansky
I’ve seen many lives destroyed. I’ve seen more people have problems with gambling than I have with drugs and alcohol. And there are some serious consequences if you get in over your head. - Michael Franseze
My uncle always told me, ‘you always have to use your brains in this thing, and you always have to use the gun - Philip Leonetti
Honest people have no ethics - Sam DeCavalcante
Never open your mouth,unless you’re in the dentist chair - Sammy “The Bull Gravano
The United States of America versus Anthony Spilotro.’Now what kind of odds are those? - Anthony Spilotro
We don’t break our captains. We kill them. - Vincent Gigante
There isnt anything on earth that I will hide from or back up from - Greg Scarpa
You’re dead, dear friend, you’re dead. You won’t get to the end of the street still walking - Louis Campagna
I have no control over anybody - Tony Accardo
I am an American citizen, first class. I don’t have a badge that makes me an official good guy like you, but I work just as honest for a living. - Lucky Luciano
That was the beginning of the end of our thing. - Anthony Casso
It’s better to live on day as a lion than a hundred years as a lamb - John Gotti
Carlos screwed up. We shouldn’t have killed John, We should have killed Bobby - Santo Trafficante
For nearly a 30 year period after the Castellammarese War no internal squabbles marred the unity of our family and no outside interference threatened the family or me. - Joe Bonanno
Hey Frank! This one’s for you! - Vincent Gigante
You sons of bitches, I got a family - Johnny Dio
Accardo had more brains for breakfast than Capone has in a lifetime - Paul Ricca
Nothing doing. The boys’ll get ’em. It’s nobody’s business but mine who put these slugs in me! - Owney Madden
We shot him in the head, stuffed him in the trunk, then dumped him for good. - Nino Gaggi
It’s all yours, Al. Me? i’m quitting. It’s Europe for me! - Johnny Torrio
Have you ever seen an elephant? - Sam DeStefano
If you don’t do whatcha supposed to, i’m going to lock your kid in the fuckin’ refrigerator - Jimmy Burke
I would move Heaven, Hell and anything in-between to get to you - Richard Kuklinski
I’m only going out for a few minutes - Anthony Strollo
He grabbed my hand and he gave me a kiss. This was a suspicious kiss. This was the kiss of death. - Joe Valachi
I don’t care whose in the car. Everybody goes - Philip Testa
Yeah, I had the son of a bitch killed. I’m glad I did. I’m sorry I couldn’t have done it myself - Carlos Marcello
If you think your boss is stupid, remember, you wouldn’t have a job if he was any smarter - John Gotti
Del, don’t worry, we only kill each other - Bugsy Siegel
Only Capone kills like that!. - Bugs Moran
I ate from the same table as Albert and came from the same womb, but I know he killed many men and he deserved to die - Anthony Anastasio
What do you mean, like do I carry a membership card that says ‘Mafia’ on it? - Willie Moretti
Tell them I was arrested for carrying concealed ideas! - Jack McGurn
I am the most powerful man in Chicago - John Scalise
The Patriarca crime family have screwed me, and now I am going to screw as many of them as possible - Joe Barboza
Don’t mistake my kindness for weakness. I am kind to everyone, but when someone is unkind to me, weak is not what you are going to remember about me - Al Capone
Mafia! What is that? A kind of cheese? - Gerlando Alberti
Don’t worry about it, he’s only shot in the arm. Let me go; the boys will take care of you! - Arnold Squitieri
Most men I know, pissed away their fortunes. I’m the only one I know, that made a fortune pissin' - Frank Costello
";

	// Here we split it into lines
	$quotes = explode( "\n", $quotes );

	// And then randomly choose a line
	return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function mob_quotes() {
	$chosen = mobquotes_get_quote();
	echo "<p id='mob'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'mob_quotes' );

// We need some CSS to position the paragraph
function mob_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dolly {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'mob_css' );

?>
