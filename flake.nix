{
  description = "A very simple sql injection vulnerability example";

  inputs = {
    nixpkgs.url = "github:nixos/nixpkgs?ref=nixos-unstable";
    flake-utils.url = "github:numtide/flake-utils";
  };

    outputs = {self, nixpkgs, flake-utils, ...}:
        flake-utils.lib.eachDefaultSystem (system: let
            pkgs = import nixpkgs {inherit system;};

            dev-tools = with pkgs; [
                docker-compose
            ];
        in {
            devShell = pkgs.mkShell {
                buildInputs = dev-tools;
            };
        }      
    );
}
