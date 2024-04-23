<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home page</title>
</head>
<body>
	<p>Alternation: ...|...
Allows several subexpressions to be tested. Alternation’s
low precedence sometimes causes subexpressions to be
longer than intended, so use parentheses to specifically
group what you want alternated. Thus, \b(foo|bar)\b
matches the words foo or bar

Monsieur l’Inspecteur Général,

J’ai l’honneur de venir auprès de votre haute autorité vous demander ce dont l’objet est repris en marge.

En effet, je suis porteur d’une Commission d’Affectation référenciée N° 353/MINFPM/IG/FPM/IPP/LKN/KC1/rbs/2019 du 26 novembre 2019, affecté au Pool d’Inspection de Mwanda pour exercer les fonctions de l’agent d’Administration de première classe.
Par ailleurs, je tiens à vous informer que je suis resté malade pendant plusieurs mois sans me faire soigner faute des moyens financiers car je demeure encore impayé jusqu’à ce jour (ni prime, sans salaire). Alors pour éviter le pire, ma famille qui se trouve à Kinshasa a jugée bon de me prendre en charge pour assurer les soins médicaux sur place.
Pour conclure, je vous prie Monsieur l’Inspecteur Général de bien vouloir m’accorder un transfert de service de la province Educationnelle du Kongo-central 1 vers les services de votre juridiction au niveau de Kinshasa afin de me permettre de rester tout près de mon médecin ainsi que ma famille pour m’assurer la prise en charge.

 
Veuillez agréer Monsieur l’Inspecteur Général, l’expression de ma considération distinguée.

Fait à Kinshasa, le 06 novembre 2023

KALONJI KALONJI Tito 
</p>

<ul>
	<?php foreach ($statementUser as $user):?>
		<li><?=$user->userName ?></li>
	<?php endforeach ?>
</ul>
</body>
</html>