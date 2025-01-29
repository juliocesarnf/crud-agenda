<?php

class Contact {

    public int $id;
    public string $name;
    public string $phone;
    public string $email;

    public function __construct( string $name = '', string $phone = '', string $email = '' ) {
        $this->name = $this->FormatName( $name );
        $this->phone = $this->formatPhone( $phone );
        $this->email = $email;
    }

    public function formatPhone( $phone ) {
        $phone = preg_replace( '/\D/', '', $phone );
        if ( strlen( $phone ) === 8 || strlen( $phone ) === 9 ) {
            $phone = '22' . $phone;
        }
        if (  strlen( $phone ) === 10 ) {
            return "(".substr( $phone, 0, 2).") ".substr( $phone, 2, 4 )."-".substr( $phone, 6 );
        } elseif (  strlen( $phone ) === 11 ) {
            return "(".substr( $phone, 0, 2 ).") ".substr( $phone, 2, 5)."-".substr( $phone, 7 );
        }
        return $phone;
    }

    public function FormatName( $name ) {
        if ( empty( $name ) ) {
            return $name;
        }
        return strtoupper( $name[ 0 ] ) . substr( $name, 1 );
    }

    public function addId( int $id ) {
        $this->id = $id;
    }
    
}


?>