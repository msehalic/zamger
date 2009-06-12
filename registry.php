< ?    
  
 / /   R E G I S T R Y   -   b a z a   k o m p o n e n t i   Z A M G E R a    
  
 / /   v 3 . 9 . 1 . 0   ( 2 0 0 8 / 0 2 / 1 4 )   -   b e t a 1    
  
  
 $ r e g i s t r y   =   a r r a y (    
 #   " p a t h " ,   " p u n i   n a z i v " ,   " U I   n a z i v " ,   " U l o g a " ,   " U   s a b l o n u " ,   " N e v i d l j i v   ( d e b u g ) "    
 #   L e g e n d a   p o l j a   U l o g a :    
 #             A   -   a d m i n ,   B   -   s t u d e n t s k a ,   N   -   s a r a d n i k ,   S   -   s t u d e n t ,   P   -   p u b l i c    
 #   S a b l o n   = =   2   z n a c i   d a   s e   n e   p r i k a z u j e   n i   h e a d e r    
  
 a r r a y ( " p u b l i c / i n t r o " ,   " L o g i n " ,   " L o g i n " ,   " P " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " p u b l i c / a n k e t a " ,   " A n k e t a " ,   " A n k e t a " ,   " P " ,   " 1 " ,   " 0 " ) ,    
  
  
 a r r a y ( " s t u d e n t / i n t r o " ,   " S t u d e n t s k i   d a s h b o a r d " ,   " D a s h b o a r d " ,   " S " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t / p r e d m e t " ,   " S t a t u s   p r e d m e t a " ,   " S t a t u s   p r e d m e t a " ,   " S " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t / z a d a c a " ,   " S l a n j e   z a d a e " ,   " S l a n j e   z a d a e " ,   " S " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t / p d f " ,   " P r i k a z   z a d a e   u   P D F   f o r m a t u " ,   " P D F " ,   " S " ,   " 2 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t / p r o s j e c i " ,   " K a l k u l a t o r   p r o s j e k a   o c j e n a " ,   " K a l k u l a t o r   p r o s j e k a " ,   " S " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t / p r i j a v a _ i s p t i t a " ,   " P r i j a v a   i s p i t a " ,   " P r i j a v a   i s p i t a " ,   " S " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t / m o o d l e " ,   " M a t e r i j a l i   ( M o o d l e ) " ,   " M a t e r i j a l i   ( M o o d l e ) " ,   " S " ,   " 2 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t / a n k e t a " ,   " A n k e t a " ,   " A n k e t a " ,   " S " ,   " 1 " ,   " 0 " ) ,    
  
  
 a r r a y ( " s a r a d n i k / i n t r o " ,   " P r e d m e t i   i   g r u p e   z a   s a r a d n i k e " ,   " P r e d m e t i " ,   " N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s a r a d n i k / g r u p a " ,   " P r e g l e d   g r u p e " ,   " P r e g l e d   g r u p e " ,   " N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s a r a d n i k / z a d a c a " ,   " P r e g l e d   z a d a e " ,   " P r e g l e d   z a d a e " ,   " N " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " s a r a d n i k / i z m j e n a _ s t u d e n t a " ,   " I z m j e n a   p o d a t a k a   o   s t u d e n t u " ,   " I z m j e n a   s t u d e n t a " ,   " N " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " s a r a d n i k / k o m e n t a r " ,   " K o m e n t a r i   n a   r a d   s t u d e n t a " ,   " K o m e n t a r " ,   " N " ,   " 0 " ,   " 0 " ) ,    
  
  
 a r r a y ( " n a s t a v n i k / p r e d m e t " ,   " O p c i j e   p r e d m e t a " ,   " O p c i j e   p r e d m e t a " ,   " N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " n a s t a v n i k / o b a v j e s t e n j a " ,   " O b a v j e at e n j a   z a   s t u d e n t e " ,   " O b a v j e at e n j a " ,   " N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " n a s t a v n i k / g r u p e " ,   " G r u p e   z a   p r e d a v a n j a   i   v j e ~b e " ,   " G r u p e " ,   " N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " n a s t a v n i k / i s p i t i " ,   " U n o s   r e z u l t a t a   i s p i t a " ,   " I s p i t i " ,   " N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " n a s t a v n i k / p r i j a v a _ i s p i t a " ,   " P r i j a v a   i s p i t a " ,   " P r i j a v a   i s p i t a " ,   " N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " n a s t a v n i k / z a d a c e " ,   " K r e i r a n j e   i   u n o s   z a d a a " ,   " Z a d a e " ,   " N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " n a s t a v n i k / o c j e n a " ,   " K o n a n a   o c j e n a " ,   " K o n a n a   o c j e n a " ,   " N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " n a s t a v n i k / i z v j e s t a j i " ,   " I z v j e at a j i " ,   " I z v j e at a j i " ,   " N " ,   " 1 " ,   " 0 " ) ,    
  
  
 a r r a y ( " s t u d e n t s k a / i n t r o " ,   " S t u d e n t s k a   s l u ~b a " ,   " P o e t n a " ,   " B " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t s k a / o s o b e " ,   " S t u d e n t i   i   n a s t a v n i c i " ,   " O s o b e " ,   " B " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t s k a / p r e d m e t i " ,   " P r e d m e t i " ,   " P r e d m e t i " ,   " B " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t s k a / p r i j e m n i " ,   " P r i j e m n i   i s p i t " ,   " P r i j e m n i " ,   " B " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t s k a / r a s p o r e d " ,   " D e f i n i s a n j e   s t u d e n t s k i h   r a s p o r e d a " ,   " R a s p o r e d " ,   " B " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t s k a / i z v j e s t a j i " ,   " I z v j e at a j i   o   p r o l a z n o s t i " ,   " I z v j e at a j i " ,   " B " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t s k a / o b a v i j e s t " ,   " S l a n j e   o b a v j e at e n j a " ,   " O b a v i j e s t i " ,   " B " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t s k a / p r o d s j e k a " ,   " P r o m j e n a   o d s j e k a " ,   " P r o m j e n a   o d s j e k a " ,   " B " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t s k a / a n k e t a " ,   " A n k e t a " ,   " A n k e t a " ,   " B " ,   " 1 " ,   " 0 " ) ,    
  
  
 a r r a y ( " a d m i n / i n t r o " ,   " A d m i n i s t r a c i j a   p r e d m e t a " ,   " S i t e   a d m i n " ,   " A " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " a d m i n / k o m p a k t " ,   " K o m p a k t o v a n j e   b a z e " ,   " K o m p a k t o v a n j e   b a z e " ,   " A " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " a d m i n / l o g " ,   " P r e g l e d   l o g o v a " ,   " L o g " ,   " A " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " a d m i n / k o n z i s t e n t n o s t " ,   " P r o v j e r a   k o n z i s t e n t n o s t i " ,   " K o n z i s t e n t n o s t " ,   " A " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " a d m i n / s t u d i j " ,   " P a r a m e t r i   s t u d i j a " ,   " S t u d i j " ,   " A " ,   " 1 " ,   " 0 " ) ,    
  
  
 a r r a y ( " i z v j e s t a j / p r e d m e t " ,   " I z v j e at a j   o   p r e d m e t u " ,   " D n e v n i k " ,   " P S N B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / g r u p e " ,   " S p i s a k   s t u d e n a t a   p o   g r u p a m a " ,   " G r u p e " ,   " N B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / i s p i t " ,   " I z v j e at a j   z a   i s p i t " ,   " I s p i t " ,   " N B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / i n d e x " ,   " S p i s a k   o c j e n a   s t u d e n t a " ,   " I n d e k s " ,   " B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / p r o l a z n o s t " ,   " P r o l a z n o s t " ,   " P r o l a z n o s t " ,   " B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / p r o g r e s s " ,   " P r e g l e d   o s t v a r e n o g   r e z u l t a t a   n a   p r e d m e t i m a " ,   " B o d o v i " ,   " B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / p r i j e m n i " ,   " R a n g   l i s t e   k a n d i d a t a   z a   u p i s " ,   " P r i j e m n i " ,   " B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / g r a n i c n i " ,   " G r a n i n i   s l u a j e v i " ,   " G r a n i n i " ,   " B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / g e n i j a l c i " ,   " P r e g l e d   s t u d e n a t a   p o   p r o s j e k u " ,   " P r o s j e k " ,   " B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / s t a t i s t i k a _ p r e d m e t a " ,   " S u m a r n a   s t a t i s t i k a   p r e d m e t a " ,   " S t a t i s t i k a   p r e d m e t a " ,   " N B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / h i s t o r i j a " ,   " H i s t o r i j a   s t u d e n t a " ,   " H i s t o r i j a   s t u d e n t a " ,   " B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / a n k e t a " ,   " R e z u l t a t i   a n k e t e " ,   " A n k e t a " ,   " N B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / a n k e t a _ s e m e s t r a l n i " ,   " R e z u l t a t i   a n k e t e " ,   " A n k e t a " ,   " N B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " i z v j e s t a j / a n k e t a _ k o m p a r a c i j a " ,   " P o r e d j e n j e   r e z u l t a t a   a n k e t e " ,   " A n k e t a " ,   " N B A " ,   " 0 " ,   " 0 " ) ,    
  
  
 a r r a y ( " c o m m o n / a j a h " ,   " A s y n c h r o n o u s   J a v a S c r i p t   A n d   H T M L " ,   " A J A H " ,   " P S N B A " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " c o m m o n / a t t a c h m e n t " ,   " D o w n l o a d   z a d a e   u   f o r m i   a t t a c h m e n t a " ,   " A t t a c h m e n t " ,   " S N " ,   " 0 " ,   " 0 " ) ,    
 a r r a y ( " c o m m o n / i n b o x " ,   " L i n e   p o r u k e " ,   " P o r u k e " ,   " S N B A " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " c o m m o n / p r o f i l " ,   " P r o f i l " ,   " P r o f i l " ,   " S N B A " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " c o m m o n / r a s p o r e d " ,   " R a s p o r e d " ,   " R a s p o r e d " ,   " S N B A " ,   " 1 " ,   " 0 " ) ,    
 / * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *    
 *   H a r i s   A g i c    
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * /    
 a r r a y ( " n a s t a v n i k / p r o j e k t i " ,   " P r o j e k t i " ,   " P r o j e k t i " ,   " N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " s t u d e n t / p r o j e k t i " ,   " P r o j e k t i " ,   " P r o j e k t i " ,   " S " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " c o m m o n / p r o j e k t n e S t r a n e " ,   " P r o j e k t n e   s t r a n e " ,   " P r o j e k t n e   s t r a n e " ,   " S N " ,   " 1 " ,   " 0 " ) ,    
 a r r a y ( " c o m m o n / f i l e D o w n l o a d " ,   " D o w n l o a d   p r o j e k t n i h   f a j l o v a " ,   " P r o j e k t n i   f a j l o v i " ,   " S N A " ,   " 2 " ,   " 0 " ) ,    
 a r r a y ( " c o m m o n / a r t i c l e I m a g e D o w n l o a d " ,   " S l i k e   p r o j e k t n i h   c l a n a k a " ,   " S l i k e   c l a n a k a " ,   " S N A " ,   " 2 " ,   " 0 " )  
 ) ;    
  
  
  
  
 ? >   