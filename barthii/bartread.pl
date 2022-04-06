use warnings;

open(FILE,"filename.php") || die "cannot open file";
open(OUT,">test4.txt");

while($line=<FILE>){

		chomp($line);
print "$line\n";
 		@arr=split(/\t/,$line);

		print OUT "$arr[0]\t$arr[1]\t$arr[2]\n";
}

close(FILE);
close(OUT);

exec('re-PCR -S barthigenome.hash -n1 -g1 -o polymorphic3.txt test4.txt');
